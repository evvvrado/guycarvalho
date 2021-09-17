<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;

class InformacoesController extends Controller
{
    //

    public function municipios(){
        return view("painel.informacoes.municipios");
    }
}
