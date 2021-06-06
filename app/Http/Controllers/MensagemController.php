<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;
use Excel;
use App\Exports\MensagensExport;

class MensagemController extends Controller
{
    //

    // public function __construct(){
    //     View::share('configuracoes', \App\Models\Configuracao::first());
    // }

    public function consultar(){
        $mensagens = Mensagem::all();
        return view("painel.mensagens.consultar", ["mensagens" => $mensagens]);
    }

    public function salvar(Request $request){
        $mensagem = new Mensagem;
        $mensagem->nome = $request->nome;
        $mensagem->assunto = "Contato";
        $mensagem->email = $request->email;
        $mensagem->telefone = $request->telefone;
        $mensagem->cidade = $request->cidade;
        $mensagem->mensagem = $request->mensagem;
        $mensagem->save();
        session()->flash("sucesso");
        return redirect()->route("site.contato");
    }

    public function exportar(){
        return Excel::download(new MensagensExport, 'mensagens.xlsx');
    }
}
