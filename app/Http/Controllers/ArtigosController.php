<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Configuracao;

class ArtigosController extends Controller
{
    //

    public function consultar(){
        // $artigos = artigo::all();
        return view("painel.artigos.consultar");
    }
    
    public function cadastro(){
        return view("painel.artigos.cadastro");
    }

    public function cadastrar(Request $request){
        $request->validate([
            'titulo' => 'unique:artigos,titulo',
        ]);

        $artigo = new artigo;
        $artigo->usuario_id = session()->get("usuario")["id"];
        $artigo->titulo = $request->titulo;
        $artigo->subtitulo = $request->subtitulo;
        $artigo->autor = $request->autor;
        $artigo->publicacao = $request->publicacao;
        $artigo->fonte = $request->fonte;
        $artigo->resumo = $request->resumo;
        $artigo->conteudo = $request->conteudo;
        $artigo->slug = Str::slug($artigo->titulo);
        $artigo->categoria_id = $request->categoria_id;
        
        if($request->file("preview")){
            $artigo->preview = $request->file('preview')->store(
                'site/imagens/artigos/' . Str::slug($artigo->titulo), 'local'
            );
        }

        if($request->file("banner")){
            $artigo->banner = $request->file('banner')->store(
                'site/imagens/artigos/' . Str::slug($artigo->titulo), 'local'
            );
        }

        $artigo->save();
        
        foreach($request->tags as $tag){
            $artigo->tags()->attach($tag);
        }   

        foreach($request->hashtags as $hashtag){
            $artigo->hashtags()->attach($hashtag);
        }  
        
        Log::channel('artigos')->info('<b>CADASTRANDO artigo</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> cadastrou a artigo <b>' . $artigo->titulo . '</b>');
        toastr()->success("Notícia salva com sucesso!");

        return redirect()->route("painel.artigos");

    }
    
    public function editar(){
        return view("painel.artigos.editar");
    }

    // public function editar(artigo $artigo){
    //     return view("painel.artigos.editar", ["artigo" => $artigo]);
    // }

    // public function salvar(Request $request, artigo $artigo){
    //     // $request->validate([
    //     //     'titulo' => 'unique:artigos,titulo,'.$artigo->id,
    //     // ]);

    //     $old = $artigo->getOriginal();

    //     $artigo->titulo = $request->titulo;
    //     $artigo->subtitulo = $request->subtitulo;
    //     $artigo->autor = $request->autor;
    //     $artigo->publicacao = $request->publicacao;
    //     $artigo->fonte = $request->fonte;
    //     $artigo->resumo = $request->resumo;
    //     $artigo->conteudo = $request->conteudo;
    //     $artigo->slug = Str::slug($artigo->titulo);
    //     $artigo->categoria_id = $request->categoria_id;

    //     if($request->file("preview")){
    //         Storage::delete($artigo->preview);
    //         $artigo->preview = $request->file('preview')->store(
    //             'site/imagens/artigos/' . Str::slug($artigo->titulo), 'local'
    //         );
    //     }

    //     if($request->file("banner")){
    //         Storage::delete($artigo->banner);
    //         $artigo->banner = $request->file('banner')->store(
    //             'site/imagens/artigos/' . Str::slug($artigo->titulo), 'local'
    //         );
    //     }

    //     $artigo->save();
        
    //     foreach($artigo->getChanges() as $campo => $valor){
    //         if(!in_array($campo, ["updated_at", "slug"])){
    //             Log::channel('artigos')->info('<b>EDITANDO artigo #'.$artigo->id.'</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> alterou o valor do campo <b>' . $campo . '</b> de <b>' . $old[$campo] . '</b> para <b>' . $valor . '</b>');
    //         }
    //     }

    //     $artigo->tags()->detach();
    //     foreach($request->tags as $tag){
    //         $artigo->tags()->attach($tag);
    //     }

    //     $artigo->hashtags()->detach();
    //     foreach($request->hashtags as $hashtag){
    //         $artigo->hashtags()->attach($hashtag);
    //     }  

    //     toastr()->success("Notícia salva com sucesso!");

    //     return redirect()->route("painel.artigos");
    // }

    // public function deletar(artigo $artigo){
    //     Storage::disk('public')->delete($artigo->preview);
    //     $artigo->tags()->detach();
    //     $artigo->delete();
    //     toastr()->success("Notícia removida com sucesso!");

    //     return redirect()->route("painel.artigos");
    // }

    // public function publicar(artigo $artigo){
    //     if($artigo->publicada){
    //         $artigo->publicada = false;
    //     }else{
    //         $artigo->publicada = true;
    //     }
    //     $artigo->save();
    //     return redirect()->back();
    // }

    // public function preview(artigo $artigo){
    //     $configuracoes = Configuracao::first();
    //     return view("painel.artigos.preview", ["artigo" => $artigo, "configuracoes" => $configuracoes]);
    // }

    // public function visitas(artigo $artigo){
    //     return view("painel.artigos.leads", ['artigo' => $artigo]);
    // }
}
