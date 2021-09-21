<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precadastro;

class PrecadastroController extends Controller
{
    //
    public function salvar(Request $request){
        $precadastro = new Precadastro;
        $precadastro->filiacao = $request->filiacao;
        $precadastro->nome = $request->nome;
        $precadastro->email = $request->email;
        $precadastro->telefone = $request->telefone;
        $precadastro->empresa = $request->empresa;
        $precadastro->save();

        session()->flash("precadastro_realizado", "Pré cadastro realizado com sucesso!");
        return redirect()->back();
    }
}
