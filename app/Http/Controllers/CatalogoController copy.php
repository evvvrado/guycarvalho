<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class 

 extends Controller
{
    //

    
    public function cadastrar(){
        return view("painel.catalogo.cadastro");
    }

}
