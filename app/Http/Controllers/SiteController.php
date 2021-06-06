<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Pagina;
use App\Models\Estadual;

class SiteController extends Controller
{
    //
    public function __construct(){
        View::share('configuracoes', \App\Models\Configuracao::first());
    }

    public function index(){
        $pagina = Pagina::where("nome", "Home")->first();
        return view("site.index", ["pagina" => $pagina]);
    }

    public function quem_somos(){
        return view("site.quem_somos");
    }

    public function cursos(){
        return view("site.cursos");
    }

    public function contato(){
        return view("site.contato");
    }

    public function cadastro(){
        return view("site.cadastro");
    }

    public function login(){
        return view("site.login");
    }

    public function associese(){
        return view("site.associe-se");
    }

    public function diretoria(){
        return view("site.diretoria");
    }

    public function estaduais(){
        $estaduais = Estadual::all();
        return view("site.estaduais", ["estaduais" => $estaduais, "slug" => null]);
    }

    public function estaduais_filtro($slug){
        $estaduais = null;
        foreach(config("globals.regioes") as $key => $regiao){
            if(Str::slug($regiao) == $slug){
                $estaduais = Estadual::where("regiao", $key)->get();
                break;
            }
        }
        return view("site.estaduais", ["estaduais" => $estaduais, "slug" => $slug]);
    }

    public function estadual($slug){
        $estadual = Estadual::where("slug", $slug)->first();
        return view("site.estadual", ["estadual" => $estadual]);
    }

    public function sommelier(){
        return view("site.sommelier");
    }

    public function noticias($slug = null){
        if($slug){
            $categoria = Categoria::where("slug", $slug)->first();
            $noticias = $categoria->noticias->where("publicada", true);
        }else{
            $noticias = Noticia::where("publicada", true)->get();
        }
        return view("site.noticias", ["noticias" => $noticias]);
    }

    public function noticia($categoria, $noticia){
        $noticia = Noticia::where("slug", $noticia)->first();
        return view("site.noticia", ["noticia" => $noticia]);
    }

    public function recuperar_senha(){
        return view("site.recuperar_senha");
    }
}
