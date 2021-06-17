<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadualDiretoria;
use App\Models\Estadual;
use Illuminate\Support\Facades\Log;

class DiretoriasController extends Controller
{
    //
    //
    public function consultar(Estadual $estadual){
        return view("painel.estaduais.diretoria", ["estadual" => $estadual]);
    }

    public function cadastrar(Request $request){
        $diretoria = new EstadualDiretoria;
        $diretoria->estadual_id = $request->estadual_id;
        $diretoria->cargo = $request->cargo;
        $diretoria->nome = $request->nome;
        $diretoria->ordem = $request->ordem;
        $diretoria->save();

        toastr()->success("Membro salvo com sucesso!");
        return redirect()->back();
    }

    public function salvar(Request $request, EstadualDiretoria $diretoria){
        $diretoria->cargo = $request->cargo;
        $diretoria->nome = $request->nome;
        $diretoria->ordem = $request->ordem;
        $diretoria->save();

        toastr()->success("Membro salvo com sucesso!");
        return redirect()->back();
    }

    public function deletar(EstadualDiretoria $diretoria){
        $diretoria->delete();
        toastr()->success("Membro removido com sucesso!");
        return redirect()->back();
    }
}
