<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class PublicidadeController extends Controller
{
    //

    
    public function editarAnuncios(){
        return view("painel.anuncios.editar");
    }
    
    public function cadastrarAnuncios(){
        return view("painel.anuncios.cadastrar");
    }

    public function consultarAnuncios(){
        return view("painel.anuncios.consultar");
    }

    
    public function editarPatrocinadores(){
        return view("painel.patrocinadores.editar");
    }
    
    public function cadastrarPatrocinadores(){
        return view("painel.patrocinadores.cadastrar");
    }

    public function consultarPatrocinadores(){
        return view("painel.patrocinadores.consultar");
    }

    
    public function editarApoio(){
        return view("painel.apoio.editar");
    }
    
    public function cadastrarApoio(){
        return view("painel.apoio.cadastrar");
    }

    public function consultarApoio(){
        return view("painel.apoio.consultar");
    }


}
