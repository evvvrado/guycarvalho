<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TreinadorController extends Controller
{

    public function treinador(){
        return view("site.treinador");
    }

    
}

