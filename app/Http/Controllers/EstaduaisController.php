<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadual;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Image;

class EstaduaisController extends Controller
{
    //
    public function consultar(){
        $estaduais = Estadual::all();
        return view("painel.estaduais.consultar", ["estaduais" => $estaduais]);
    }

    public function cadastro(){
        return view("painel.estaduais.cadastro");
    }

    public function cadastrar(Request $request){
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $estadual = new Estadual;

        $estadual->nome = $request->nome;
        $estadual->email = $request->email;
        $estadual->telefone = $request->telefone;
        $estadual->whatsapp = $request->whatsapp;
        $estadual->slug = $request->slug;
        $estadual->site = $request->site;
        $estadual->facebook = $request->facebook;
        $estadual->instagram = $request->instagram;
        $estadual->regiao = $request->regiao;
        $estadual->sobre = $request->sobre;

        if($request->file("foto")){
            $image = $request->file('foto');
            $input['imagename'] = time().'.'.$image->extension();
        
            $destinationPath = public_path('site/imagens/estaduais');
            $img = Image::make($image->path());
            $img->crop(470, 400)->save($destinationPath.'/'.$input['imagename']);
            $estadual->foto = 'site/imagens/estaduais/'.$input['imagename'];
        }

        $estadual->save();
        toastr()->success("Estadual salva com sucesso !");
        return redirect()->route("painel.estaduais");
    }

    public function editar(Estadual $estadual){
        return view("painel.estaduais.editar", ["estadual" => $estadual]);
    }

    public function salvar(Request $request, Estadual $estadual){
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        $estadual->nome = $request->nome;
        $estadual->email = $request->email;
        $estadual->telefone = $request->telefone;
        $estadual->whatsapp = $request->whatsapp;
        $estadual->slug = $request->slug;
        $estadual->site = $request->site;
        $estadual->facebook = $request->facebook;
        $estadual->instagram = $request->instagram;
        $estadual->regiao = $request->regiao;
        $estadual->sobre = $request->sobre;

        if($request->file("foto")){
            Storage::delete($estadual->foto);
            $image = $request->file('foto');
            $input['imagename'] = time().'.'.$image->extension();
        
            $destinationPath = public_path('site/imagens/estaduais');
            $img = Image::make($image->path());
            $img->crop(470, 400)->save($destinationPath.'/'.$input['imagename']);
            $estadual->foto = 'site/imagens/estaduais/'.$input['imagename'];
        }

        $estadual->save();
        toastr()->success("Estadual salva com sucesso !");
        return redirect()->route("painel.estaduais");
    }

    public function deletar(Estadual $estadual){
        Storage::delete($estadual->foto);
        $estadual->delete();
        toastr()->success("Estadual excluída com sucesso!");
        return redirect()->back();
    }
}
