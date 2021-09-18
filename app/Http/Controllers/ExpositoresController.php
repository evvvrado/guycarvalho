<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class ExpositoresController extends Controller
{
    
    public function cadastrar(){
        return view("painel.expositores.cadastro");
    }

    
    
    public function consultar(){
        return view("painel.expositores.consultar");
    }
    
    
    public function editar(){
        return view("painel.expositores.editar");
    }


}
