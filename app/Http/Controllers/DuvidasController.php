<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class DuvidasController extends Controller
{
    //

    
    public function editar(){
        return view("painel.duvidas.editar");
    }
    
    public function cadastrar(){
        return view("painel.duvidas.cadastrar");
    }

    public function consultar(){
        return view("painel.duvidas.consultar");
    }

}
