<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class GaleriaController extends Controller
{

    public function consultar()
    {
        return view("painel.galeria.consultar");
    }

    public function cadastrar()
    {
        return view("painel.galeria.cadastrar");
    }
}
