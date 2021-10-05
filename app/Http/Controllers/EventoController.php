<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Configuracao;

class EventoController extends Controller
{
    //

    public function consultar(){
        return view("painel.eventos.consultar");
    }
    
    public function cadastrar(){
        return view("painel.eventos.cadastrar");
    }

    public function editar(){
        return view("painel.eventos.editar");
    }
}
