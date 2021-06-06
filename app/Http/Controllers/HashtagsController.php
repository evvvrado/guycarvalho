<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hashtag;

class HashtagsController extends Controller
{
    //
    public function consultar(){
        $hashtags = Hashtag::all();
        return view("painel.hashtags.consultar", ["hashtags" => $hashtags]);
    }

    public function cadastrar(Request $request){
        $request->validate([
            'nome' => 'unique:hashtags,nome',
        ]);

        $hashtags = new Hashtag;
        $hashtags->nome = $request->nome;
        $hashtags->save();

        toastr()->success("Hashtag salva com sucesso!");
        return redirect()->back();
    }

    public function salvar(Request $request, Hashtag $hashtag){
        $request->validate([
            'nome' => 'unique:hashtags,nome,'.$hashtag->id,
        ]);

        $hashtag->nome = $request->nome;
        $hashtag->save();

        toastr()->success("Hashtag salva com sucesso!");
        return redirect()->back();
    }

    public function deletar(Hashtag $hashtag){
        $hashtag->delete();
        toastr()->success("Hashtag removida com sucesso!");
        return redirect()->back();
    }
}
