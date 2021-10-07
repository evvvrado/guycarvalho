<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\CursoDepoimento;
use Illuminate\Support\Facades\Storage;

class CursoDepoimentosController extends Controller
{
    //

    public function salvar(Request $request, Curso $curso){
        if($request->depoimento_id){
            $depoimento = CursoDepoimento::find($request->depoimento_id);
        }else{
            $depoimento = new CursoDepoimento;
        }

        $depoimento->curso_id = $curso->id;
        $depoimento->nome = $request->nome;
        $depoimento->depoimento = $request->depoimento;

        if($request->file("foto")){
            Storage::delete($depoimento->foto);
            $depoimento->foto = $request->file('foto')->store(
                'site/imagens/depoimentos/', 'local'
            );
        }

        $depoimento->save();

        toastr()->success("Depoimento salvo com sucesso!");
        session()->flash("aba", "depoimento");
        return redirect()->back();
    }

    public function deletar(CursoDepoimento $depoimento){
        Storage::delete($depoimento->foto);
        $depoimento->delete();
        toastr()->success("Depoimento removido com sucesso!");
        session()->flash("aba", "depoimento");
        return redirect()->back();
    }
}
