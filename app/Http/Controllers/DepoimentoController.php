<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class DepoimentoController extends Controller
{
    //

    
    public function editar(){
        return view("painel.depoimento.editar");
    }
    
    public function cadastrar(){
        return view("painel.depoimento.cadastrar");
    }

    public function consultar(){
        return view("painel.depoimento.consultar");
    }

}
