<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Venda;
use App\Models\PagamentoCartao;
use App\Models\Carrinho;
use App\Models\Matricula;
use Jlorente\CreditCards\CreditCardTypeConfig;
use Jlorente\CreditCards\CreditCardValidator;
use App\Classes\Cielo\CieloRequisicaoCredito;

class CieloController extends Controller
{
    //
    public function finalizar_credito(Request $request){
        $carrinho = Carrinho::find(session()->get("carrinho"));
        $codigo = date("Ymd") . str_pad($carrinho->id, 8, "0", STR_PAD_LEFT);
        $validator = new CreditCardValidator();
        $valido = $validator->isValid(str_replace(" ", "", $request->numero));
        if ($valido) {
            $bandeira = $validator->getType(str_replace(" ", "", $request->numero))->getNiceType();
        } else {
            session()->flash("erro", "Número de cartão inválido");
            return redirect()->back();
        }
        // $bandeira = 'visa';
        $cielo = new CieloRequisicaoCredito();

        $cielo->addSale($codigo);
        $cielo->addCustomer($request->nome);
        $cielo->addPayment($carrinho->total);
        // $cielo->addCreditCard($request->numero, $bandeira, $request->expiracao, $request->cvv, $request->nome, $request->parcelas);
        $cielo->addCreditCard(str_replace(" ", "", $request->numero), config("cielo.bandeiras")[$bandeira], $request->expiracao, $request->cvv, $request->nome, $request->parcelas);
        $res = $cielo->efetuar();

        if($res["status"] == 200){

            if($res["retorno"] == "00" || $res["retorno"] == "11"){
                $venda = new Venda;
                $venda->aluno_id = session()->get("aluno")["id"];
                $venda->carrinho_id = $carrinho->id;
                $venda->codigo = $codigo;
                $venda->total = $carrinho->total;
                $venda->forma = 1;
                $venda->status = 1;
                $venda->gateway = 1;
                $venda->parcelas = $request->parcelas;
                $venda->valor_parcela = $venda->total / $venda->parcelas;
                $venda->desconto = 0;
                $venda->save();

                $pagamento = new PagamentoCartao;
                $pagamento->venda_id = $venda->id;
                $pagamento->codigo = $res["payment_id"];
                $pagamento->numero = $res["numero"];
                $pagamento->save();

                foreach($venda->carrinho->produtos as $produto){
                    if(!$produto->curso->pacote){
                        $matricula = new Matricula;
                        $matricula->aluno_id = $venda->aluno_id;
                        $matricula->curso_id = $produto->curso_id;
                        $matricula->save();
                    }else{
                        foreach($produto->curso->cursos as $curso){
                            $matricula = new Matricula;
                            $matricula->aluno_id = $venda->aluno_id;
                            $matricula->curso_id = $curso->id;
                            $matricula->save();
                        }
                    }
                    
                }
                
                $carrinho->aberto = false;
                $carrinho->save();

                session()->forget("carrinho");
                session()->put(["venda_finalizada" => $venda->id]);

                return redirect()->route("site.carrinho-confirmacao");
            }else{
                session()->flash("erro", config("cielo.erros")[$res["retorno"]]);
                return redirect()->route("site.carrinho.pagamento.cartao");
            }
        }else{
            session()->flash("erro", "Erro nos dados do cartão. Verifique se as informações estão corretas e tente novamente.");
            return redirect()->route("site.carrinho.pagamento.cartao");
        }

        
    }

    public function capturar(Venda $venda)
    {
        $pagamento = $venda->cartao;
        $cielo = new CieloRequisicaoCredito();
        $res = $cielo->capturar($pagamento->codigo, $pagamento->venda->total);
        dd($res);
    }
    
}
