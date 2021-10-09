<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\EventoCurso;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class EventoController extends Controller
{
    //

    public function consultar(){
        $eventos = Evento::all();
        return view("painel.eventos.consultar", ["eventos" => $eventos]);
    }
    
    public function cadastrar(){
        return view("painel.eventos.cadastrar");
    }

    public function editar(Evento $evento){
        return view("painel.eventos.editar", ["evento" => $evento]);
    }

    public function salvar(Request $request){
        if($request->evento_id){
            $evento = Evento::find($request->evento_id);
            $evento->nome = $request->nome;
            $evento->slug = Str::slug($request->nome);
        }else{
            $evento = new Evento;
            $evento->nome = $request->nome;
            $evento->slug = Str::slug($request->nome);
            $evento->save();
        }

        $evento->descricao = $request->descricao;
        $evento->titulo = $request->titulo;
        $evento->sobre = $request->sobre;
        $evento->inicio = $request->inicio;
        $evento->fim = $request->fim;
        $evento->video = $request->video;

        if($request->file("thumbnail")){
            Storage::delete($evento->thumbnail);
            $evento->thumbnail = $request->file('thumbnail')->store(
                'site/imagens/eventos/' . $evento->id, 'local'
            );
        }

        if($request->file("banner")){
            Storage::delete($evento->banner);
            $evento->banner = $request->file('banner')->store(
                'site/imagens/eventos/' . $evento->id, 'local'
            );
        }

        if($request->clinica){
            $evento->clinica = true;
        }

        $evento->save();

        if($evento->clinica){
            toastr()->success("Clínica salva com sucesso!");
            return redirect()->route("painel.clinicas");
        }else{
            toastr()->success("Evento salvo com sucesso!");
            return redirect()->route("painel.eventos");
        }

    }

    public function salvar_local(Request $request, Evento $evento){
        $evento->local_nome = $request->local_nome;
        $evento->local_endereco = $request->local_endereco;
        if($request->file("local_foto")){
            Storage::delete($evento->local_foto);
            $evento->local_foto = $request->file('local_foto')->store(
                'site/imagens/eventos/' . $evento->id, 'local'
            );
        }
        $evento->save();
        toastr()->success("Local salvo com sucesso!");
        return redirect()->back();
    }

    public function adicionar_curso(Request $request, Evento $evento){
        $evento_curso = new EventoCurso;
        $evento_curso->evento_id = $evento->id;
        $evento_curso->curso_id = $request->curso_id;
        $evento_curso->data = $request->data;
        $evento_curso->save();
        toastr()->success("Curso adicionado ao evento");
        return redirect()->back();
    }

    public function deletar_curso(EventoCurso $evento_curso){
        $evento_curso->delete();
        toastr()->success("Curso removido do evento");
        return redirect()->back();
    }
}
