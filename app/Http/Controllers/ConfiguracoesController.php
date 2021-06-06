<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracao;
use App\Models\Pagina;

class ConfiguracoesController extends Controller
{
    //

    public function contato(){
        $configuracoes = Configuracao::first();
        return view("painel.configuracoes.contato", ["configuracoes" => $configuracoes]);
    }

    public function contato_salvar(Request $request){
        $configuracoes = Configuracao::first();

        $configuracoes->rua = $request->rua;
        $configuracoes->numero = $request->numero;
        $configuracoes->cep = $request->cep;
        $configuracoes->complemento = $request->complemento;
        $configuracoes->bairro = $request->bairro;
        $configuracoes->cidade = $request->cidade;
        $configuracoes->estado = $request->estado;
        $configuracoes->telefone = $request->telefone;
        $configuracoes->whatsapp = $request->whatsapp;
        $configuracoes->email = $request->email;
        $configuracoes->facebook = $request->facebook;
        $configuracoes->instagram = $request->instagram;
        $configuracoes->tiktok = $request->tiktok;
        $configuracoes->youtube = $request->youtube;
        $configuracoes->linkedin = $request->linkedin;
        $configuracoes->pinterest = $request->pinterest;
        $configuracoes->google_negocio = $request->google_negocio;

        $configuracoes->save();
        toastr()->success("Informações de contato salvas com sucesso!");
        return redirect()->back();
    }

    public function seo(){
        $paginas = Pagina::all();
        return view("painel.configuracoes.seo", ["paginas" => $paginas]);
    }

    public function seo_salvar(Request $request, Pagina $pagina){
        $pagina->titulo = $request->titulo;
        $pagina->descricao = $request->descricao;
        $pagina->palavras = $request->palavras;
        $pagina->save();
        toastr()->success("Alterações salvas com sucesso");
        return redirect()->back();
    }
}
