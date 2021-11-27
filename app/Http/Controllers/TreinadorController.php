<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Professor;


class TreinadorController extends Controller
{

    public function treinador(Professor $professor){
        return view("site.treinador", ['professor' => $professor]);
    }

    
}

