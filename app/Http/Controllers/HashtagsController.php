<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hashtag;
use Illuminate\Support\Facades\Log;

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

        $hashtag = new Hashtag;
        $hashtag->nome = $request->nome;
        $hashtag->save();

        Log::channel('hashtags')->info('<b>CADASTRANDO HASHTAG</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> cadastrou a hashtag <b>' . $hashtag->nome . '</b>');

        toastr()->success("Hashtag salva com sucesso!");
        return redirect()->back();
    }

    public function salvar(Request $request, Hashtag $hashtag){
        $request->validate([
            'nome' => 'unique:hashtags,nome,'.$hashtag->id,
        ]);

        $old = $hashtag->getOriginal();

        $hashtag->nome = $request->nome;
        $hashtag->save();

        foreach($hashtag->getChanges() as $campo => $valor){
            if(!in_array($campo, ["updated_at", "slug"])){
                Log::channel('hashtags')->info('<b>EDITANDO HASHTAG #'.$hashtag->id.'</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> alterou o valor do campo <b>' . $campo . '</b> de <b>' . $old[$campo] . '</b> para <b>' . $valor . '</b>');
            }
        }

        toastr()->success("Hashtag salva com sucesso!");
        return redirect()->back();
    }

    public function deletar(Hashtag $hashtag){
        $hashtag->delete();
        toastr()->success("Hashtag removida com sucesso!");
        return redirect()->back();
    }
}
