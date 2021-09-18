<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class PublicidadeController extends Controller
{
    //

    
    public function editar(){
        return view("painel.anuncios.editar");
    }
    
    public function cadastrar(){
        return view("painel.anuncios.cadastrar");
    }

    public function consultar(){
        return view("painel.anuncios.consultar");
    }

}
