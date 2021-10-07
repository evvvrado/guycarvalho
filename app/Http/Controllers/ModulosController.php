<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Modulo;

class ModulosController extends Controller
{
    //

    public function salvar(Request $request, Curso $curso){
        if($request->modulo_id){
            $modulo = Modulo::find($request->modulo_id);
        }else{
            $modulo = new Modulo;
        }

        $modulo->curso_id = $curso->id;
        $modulo->nome = $request->nome;
        $modulo->descricao = $request->descricao;

        $modulo->save();

        toastr()->success("Módulo salvo com sucesso!");
        session()->flash("aba", "modulo");
        return redirect()->back();
    }

    public function deletar(Modulo $modulo){
        $modulo->delete();
        toastr()->success("Módulo removido com sucesso!");
        session()->flash("aba", "modulo");
        return redirect()->back();
    }
}
