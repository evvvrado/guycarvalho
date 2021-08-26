<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Gerencianet\GerencianetRequisicaoBoleto;
use Illuminate\Support\Facades\Log;
use App\Models\Carrinho;
use App\Models\Aluno;
use App\Models\Venda;
use App\Models\PagamentoBoleto;

class GerencianetController extends Controller
{
    //
    public function boleto(){
        $gerencianet = new GerencianetRequisicaoBoleto();
        $carrinho = Carrinho::find(session()->get("carrinho"));
        $aluno = Aluno::find(session()->get("aluno")["id"]);
        $desconto = ($carrinho->total * 10 / 100);
        // $gerencianet->enviarBoletoEmail(1334034, 'gusouza980@gmail.com');
        $turmas = [];
        foreach($carrinho->produtos as $produto){
            $produto->turma->inscritos += 1;
            $produto->turma->save();
            $gerencianet->addItem([
                'name' => $produto->turma->curso->titulo, // nome do item, produto ou serviço
                'amount' => 1, // quantidade
                'value' => $produto->total 
            ]);
        }

        $cpf = str_replace(".", "", $aluno->cpf);
        $cpf = str_replace("-", "", $cpf);

        $telefone = str_replace("(", "", $aluno->telefone);
        $telefone = str_replace(")", "", $telefone);
        $telefone = str_replace("-", "", $telefone);
        $telefone = str_replace(" ", "", $telefone);
        
        $gerencianet->addCustomer([
            'name' => $aluno->nome, // nome do cliente
            'cpf' => $cpf, // cpf válido do cliente
            'phone_number' => $telefone, // telefone do cliente
        ]);

        $gerencianet->addDesconto([
            'type' => 'currency',
            'value' => $desconto
        ]);

        // $gerencianet->addJurosMora([
        //     'fine' => 200,
        //     'interest' => 33
        // ]);

        // $gerencianet->addDescontoCondicional([
        //     'type' => 'percentage', // seleção do tipo de desconto 
        //     'value' => 200, // porcentagem de desconto
        //     'until_date' => '2021-07-05' // data máxima para aplicação do desconto
        // ]);

        $gerencianet->addBoleto([
            'expire_at' => date("Y-m-d", strtotime("+15 days")), // data de vencimento do titulo
            'message' => 'Acompanhe o status do seu pagamento no seu painel do cliente.', // mensagem a ser exibida no boleto
        ]);
        
        $res = $gerencianet->gerarBoleto();
        // dd($res);
        if($res["code"] == 200){
            
            $venda = new Venda;
            $venda->aluno_id = $aluno->id;
            $venda->carrinho_id = $carrinho->id;
            $venda->codigo = date("Ymd") . str_pad($carrinho->id, 8, "0", STR_PAD_LEFT);
            $venda->total = $carrinho->total - $desconto;
            $venda->forma = 0;
            $venda->status = 0;
            $venda->gateway = 0;
            $venda->parcelas = 1;
            $venda->valor_parcela = $venda->total;
            $venda->desconto = $desconto;
            $venda->save();

            $boleto = new PagamentoBoleto;
            $boleto->venda_id = $venda->id;
            $boleto->charge_id = $res["data"]["charge_id"];
            $boleto->codigo_barra = $res["data"]["barcode"];
            $boleto->link = $res["data"]["link"];
            if(isset($res["data"]["pdf"]) && isset($res["data"]["pdf"]["charge"])){
                $boleto->pdf = $res["data"]["pdf"]["charge"];
            }
            $boleto->expira = $res["data"]["expire_at"];
            $boleto->status = $res["data"]["status"];
            $boleto->total = $res["data"]["total"];
            $boleto->save();

            session()->forget("carrinho");
            session()->put(["venda_finalizada" => $venda->id]);
            $gerencianet->enviarBoletoEmail($boleto->charge_id, $aluno->email);
            return redirect()->route("site.carrinho-confirmacao");
        }else{
            foreach($carrinho->produtos as $produto){
                $produto->turma->inscritos -= 1;
                $produto->turma->save();
            }
        }
        
        return redirect()->route("site.carrinho-efetuar");
    }
}
