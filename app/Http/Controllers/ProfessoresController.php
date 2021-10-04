<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class ProfessoresController extends Controller
{
    public function consultar(){
        return view("painel.professores.consultar");
    }
    public function cadastrar(){
        return view("painel.professores.cadastrar");
    }
    public function editar(){
        return view("painel.professores.editar");
    }
    public function hotsite(){
        return view("painel.professores.hotsite");
    }

}
