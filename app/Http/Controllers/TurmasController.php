<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Turma;

class TurmasController extends Controller
{
    //
    public function consultar(Curso $curso){
        $turmas = $curso->turmas;
        return view("painel.turmas.consultar", ['turmas' => $turmas, "curso" => $curso]);
    }

    public function getTurma(Turma $turma){
        return response()->json($turma->toJson());
    }

    public function cadastrar(Request $request){
        if($request->turma_id){
            $turma = Turma::find($request->turma_id);
            toastr()->success("Alterações salvas com sucesso!");
        }else{
            $turma = new Turma;
            $turma->curso_id = $request->curso_id;
            toastr()->success("Turma cadastrada com sucesso!");
        }
        $turma->nome = $request->nome;
        $turma->local = $request->local;
        $turma->data = $request->data;
        $turma->horario = $request->horario;
        $turma->preco = $request->preco;
        $turma->parcelas = $request->parcelas;
        $turma->vagas = $request->vagas; 
        $turma->periodo = $request->periodo;
        $turma->save();
        return redirect()->back();
    }

    public function ativo(Turma $turma){
        $turma->ativo = !$turma->ativo;
        $turma->save();
        return redirect()->back();
    }

    public function inscricao(Turma $turma){
        $turma->aberto = !$turma->aberto;
        $turma->save();
        return redirect()->back();
    }
}
