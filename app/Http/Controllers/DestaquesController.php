<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DestaqueSuspenso;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class DestaquesController extends Controller
{
    public function index(){
        $destaques = DestaqueSuspenso::all();
        return view("painel.destaques.consultar", ["destaques" => $destaques]);
    }

    public function cadastrar(Request $request){
        $destaque = new DestaqueSuspenso;
        $destaque->titulo = $request->titulo;
        $destaque->descricao = $request->descricao;
        $destaque->inicio = $request->inicio;
        $destaque->fim = $request->fim;

        if($request->file("imagem")){
            Storage::delete($destaque->imagem);
            $destaque->imagem = $request->file('imagem')->store(
                'site/imagens/destaques/' . Str::slug($destaque->titulo), 'local'
            );
        }

        $destaque->save();
        return redirect()->back();
    }

    public function salvar(Request $request, DestaqueSuspenso $destaque){
        $destaque->titulo = $request->titulo;
        $destaque->descricao = $request->descricao;
        $destaque->inicio = $request->inicio;
        $destaque->fim = $request->fim;

        if($request->file("imagem")){
            Storage::delete($destaque->imagem);
            $destaque->imagem = $request->file('imagem')->store(
                'site/imagens/destaques/' . Str::slug($destaque->titulo), 'local'
            );
        }

        $destaque->save();
        return redirect()->back();
    }

    public function deletar(DestaqueSuspenso $destaque){
        Storage::delete($destaque->imagem);
        $destaque->delete();
        return redirect()->back();
    }
}
