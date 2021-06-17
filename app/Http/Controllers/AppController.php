<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\AppElemento;
use App\Models\App;
use App\Models\AppVisitante;
use App\Models\AppAcesso;
use App\Models\AppClick;

class AppController extends Controller
{
    //
    public function consultar(){
        $apps = App::all();
        return view("painel.app.consultar", ["apps" => $apps]);
    }

    public function cadastro(){
        return view("painel.app.cadastro");
    }

    public function cadastrar(Request $request){
        $app = new App;
        
        $app->nome = $request->nome;

        $app->url = $request->url;
        $app->slug = Str::slug($request->slug);
        $app->ativo = $request->ativo;

        $app->whatsapp = $request->whatsapp;

        $app->login_google = $request->login_google;
        $app->senha_google = $request->senha_google;

        $app->facebook = $request->facebook;
        $app->login_facebook = $request->login_facebook;
        $app->senha_facebook = $request->senha_facebook;

        $app->linkedin = $request->linkedin;
        $app->login_linkedin = $request->login_linkedin;
        $app->senha_linkedin = $request->senha_linkedin;

        $app->instagram = $request->instagram;
        $app->login_instagram = $request->login_instagram;
        $app->senha_instagram = $request->senha_instagram;

        $app->pinterest = $request->pinterest;
        $app->login_pinterest = $request->login_pinterest;
        $app->senha_pinterest = $request->senha_pinterest;

        $app->youtube = $request->youtube;
        $app->login_youtube = $request->login_youtube;
        $app->senha_youtube = $request->senha_youtube;

        $app->twitter = $request->twitter;
        $app->login_twitter = $request->login_twitter;
        $app->senha_twitter = $request->senha_twitter;

        $app->google_negocio = $request->google_negocio;
        $app->login_google_negocio = $request->login_google_negocio;
        $app->senha_google_negocio = $request->senha_google_negocio;

        $app->tiktok = $request->tiktok;
        $app->login_tiktok = $request->login_tiktok;
        $app->senha_tiktok = $request->senha_tiktok;

        if($request->file("logo")){
            $app->logo = $request->file('logo')->store(
                'admin/images/app/logos/'.Str::slug($app->nome), 'local'
            );
        }

        $app->save();

        Log::channel('app')->info('<b>CADASTRANDO APP #'.$app->id.'</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> cadastrou o app <b>' . $app->nome . '</b>.');

        // toastr()->success("Cliente cadastrado com sucesso!");
        return redirect()->route("painel.app");
    }

    public function editar(App $app){
        return view("painel.app.edicao", ["app" => $app]);
    }

    public function salvar(Request $request, App $app){

        $old = $app->getOriginal();

        $app->nome = $request->nome;

        $app->url = $request->url;
        $app->slug = Str::slug($request->slug);
        $app->ativo = $request->ativo;

        $app->titulo = $request->titulo;
        $app->cor_titulo = $request->cor_titulo;
        $app->subtitulo = $request->subtitulo;
        $app->cor_subtitulo = $request->cor_subtitulo;
        $app->cor_fundo_cartao = $request->cor_fundo_cartao;
        $app->cor_fundo_cartao_hover = $request->cor_fundo_cartao_hover;
        $app->cor_letra_cartao = $request->cor_letra_cartao;
        $app->cor_letra_cartao_hover = $request->cor_letra_cartao_hover;

        $app->whatsapp = $request->whatsapp;

        $app->login_google = $request->login_google;
        $app->senha_google = $request->senha_google;

        $app->facebook = $request->facebook;
        $app->login_facebook = $request->login_facebook;
        $app->senha_facebook = $request->senha_facebook;

        $app->linkedin = $request->linkedin;
        $app->login_linkedin = $request->login_linkedin;
        $app->senha_linkedin = $request->senha_linkedin;

        $app->instagram = $request->instagram;
        $app->login_instagram = $request->login_instagram;
        $app->senha_instagram = $request->senha_instagram;

        $app->pinterest = $request->pinterest;
        $app->login_pinterest = $request->login_pinterest;
        $app->senha_pinterest = $request->senha_pinterest;

        $app->youtube = $request->youtube;
        $app->login_youtube = $request->login_youtube;
        $app->senha_youtube = $request->senha_youtube;

        $app->twitter = $request->twitter;
        $app->login_twitter = $request->login_twitter;
        $app->senha_twitter = $request->senha_twitter;

        $app->google_negocio = $request->google_negocio;
        $app->login_google_negocio = $request->login_google_negocio;
        $app->senha_google_negocio = $request->senha_google_negocio;

        $app->tiktok = $request->tiktok;
        $app->login_tiktok = $request->login_tiktok;
        $app->senha_tiktok = $request->senha_tiktok;

        if($request->file("logo")){
            Storage::delete($app->logo);
            $app->logo = $request->file('logo')->store(
                'admin/images/app/logos/'.Str::slug($app->nome), 'local'
            );
        }

        if($request->file("fundo")){
            Storage::delete($app->fundo);
            $app->fundo = $request->file('fundo')->store(
                'admin/images/app/rede/'.Str::slug($app->nome), 'local'
            );
        }

        $app->save();

        foreach($app->getChanges() as $campo => $valor){
            if(!in_array($campo, ["updated_at"])){
                Log::channel('cadastros')->info('<b>EDITANDO APP #' . $app->id . '</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> alterou o valor do campo <b>' . $campo . '</b> de <b>' . $old[$campo] . '</b> para <b>' . $valor . '</b>');
            }
        }

        // toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.app');
    }

    public function rede(Request $request, App $app){
        switch ($request->name) {
            case "facebook_ativo":
                if($app->facebook_ativo){
                    $app->facebook_ativo = false;
                    $msg = "O Facebook foi removido";
                }else{
                    $app->facebook_ativo = true;
                    $msg = "O Facebook foi adicionado";
                }
                
                break;
            case "linkedin_ativo":
                if($app->linkedin_ativo){
                    $app->linkedin_ativo = false;
                    $msg = "O Linkedin foi removido";
                }else{
                    $app->linkedin_ativo = true;
                    $msg = "O Linkedin foi adicionado";
                }
                break;
            case "instagram_ativo":
                if($app->instagram_ativo){
                    $app->instagram_ativo = false;
                    $msg = "O Instagram foi removido";
                }else{
                    $app->instagram_ativo = true;
                    $msg = "O Instagram foi adicionado";
                }
                break;
            case "pinterest_ativo":
                if($app->pinterest_ativo){
                    $app->pinterest_ativo = false;
                    $msg = "O Pinterest foi removido";
                }else{
                    $app->pinterest_ativo = true;
                    $msg = "O Pinterest foi adicionado";
                }
                break;
            case "twitter_ativo":
                if($app->twitter_ativo){
                    $app->twitter_ativo = false;
                    $msg = "O Twitter foi removido";
                }else{
                    $app->twitter_ativo = true;
                    $msg = "O Twitter foi adicionado";
                }
                break;
            case "youtube_ativo":
                if($app->youtube_ativo){
                    $app->youtube_ativo = false;
                    $msg = "O Youtube foi removido";
                }else{
                    $app->youtube_ativo = true;
                    $msg = "O Youtube foi adicionado";
                }
                break;
            case "google_negocio_ativo":
                if($app->google_negocio_ativo){
                    $app->google_negocio_ativo = false;
                    $msg = "O Google Meu Negócio foi removido";
                }else{
                    $app->google_negocio_ativo = true;
                    $msg = "O Google Meu Negócio foi adicionado";
                }
                break;
            case "tiktok_ativo":
                if($app->tiktok_ativo){
                    $app->tiktok_ativo = false;
                    $msg = "O Tiktok foi removido";
                }else{
                    $app->tiktok_ativo = true;
                    $msg = "O Tiktok foi adicionado";
                }
                break;
        }

        $app->save();

        // switch($request->name)
        return response()->json($msg, 200);
    }

    public function adicionar_rede(Request $request, App $app){
        $elemento = new AppElemento;
        $elemento->app_id = $app->id;
        if($request->file("imagem")){
            $elemento->imagem = $request->file('imagem')->store(
                'admin/images/app/rede/'.Str::slug($app->nome), 'local'
            );
        }

        $elemento->titulo = $request->titulo;
        $elemento->link = $request->link;
        $elemento->posicao = $request->posicao;
        $elemento->save();

        // toastr()->success("Elemento adicionado ao links da(o) " . $cliente->nome);
        return redirect()->back()->with("meuslinks", "meuslinks");
    }

    public function salvar_rede(Request $request, AppElemento $elemento){
        if($request->file("imagem")){
            Storage::delete($elemento->imagem);
            $elemento->imagem = $request->file('imagem')->store(
                'admin/images/app/rede/'.Str::slug($elemento->imagem), 'local'
            );
        }

        $elemento->titulo = $request->titulo;
        $elemento->link = $request->link;
        $elemento->posicao = $request->posicao;
        $elemento->save();

        // toastr()->success("Elemento salvo com sucesso");
        return redirect()->back()->with("meuslinks", "meuslinks");
    }

    public function remover_rede(AppElemento $elemento){
        Storage::delete($elemento->imagem);
        $elemento->delete();
        // toastr()->success("Elemento removido com sucesso");
        return redirect()->back()->with("meuslinks", "meuslinks");
    }

    public function relatorio(App $app){
        $dados = array();
        $dados["elementos"] = array();
        $dados["total_visitantes"] = 0;
        $dados["total_acessos"] = 0;
        $dados["total_clicks"] = 0;
        $dados["acessos_com_click"] = 0;
        $dados["clicks_elementos"] = 0;
        $dados["clicks_redes"] = 0;


        foreach($app->elementos as $elemento){
            $dados["elementos"][$elemento->id]["total_clicks"] = 0;
            $dados["elementos"][$elemento->id]["text"] = $elemento->titulo;
        }

        foreach(config("globals.redes") as $codigo => $texto){
            $dados["redes"][$codigo]["total_clicks"] = 0;
            $dados["redes"][$codigo]["text"] = $texto;
        }

        if($app->acessos){
            $visitantes = $app->acessos->groupBy("visitante_id");
            foreach($visitantes as $visitante => $acessos){
                $dados["visitantes"][$visitante]["total_acessos"] = 0;
                $dados["total_visitantes"] += 1;
                foreach($acessos as $acesso){
                    $dados["total_acessos"] += 1;
                    $dados["visitantes"][$visitante]["acessos"][] = $acesso; 
                    $dados["visitantes"][$visitante]["total_acessos"] += 1;
                    if($acesso->clicks->count() > 0){
                        $dados["acessos_com_click"] += 1;
                        foreach($acesso->clicks as $click){
                            if($click->elemento){
                                $dados["elementos"][$click->element->id]["total_clicks"] += 1;
                                $dados["clicks_elementos"] += 1;
                            }else{
                                $dados["redes"][$click->tipo_rede]["total_clicks"] += 1;
                                $dados["clicks_redes"] += 1;
                            }
                            $dados["total_clicks"] += 1;
                        }
                    }
                }
            }
        }
        // dd($dados);

        // dd($dados);

        return view("painel.app.relatorio", [
            "dados" => $dados,
            "cliente" => $app,
        ]);
    }

    //
    public function index($slug){
        if($slug == 'sistema'){
            return redirect()->route("painel.index");
        }
        $app = App::where([["slug", $slug], ["ativo", true]])->first();
        if($app){
            $ip = null;

            if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                //ip from share internet
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                //ip pass from proxy
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }else{
                $ip = $_SERVER['REMOTE_ADDR'];
            }
        
            $estado = null;
            $cidade = null;
            $cep = null;

            $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
        
            if($query && $query["status"] == "success"){
                $estado = $query["region"];
                $cidade = $query["city"];
                $cep = $query["zip"];
            }

            $visitante = AppVisitante::where("ip", $ip)->first();
            if(!$visitante){
                $visitante = new AppVisitante;
                $visitante->ip = $ip;
                $visitante->ip_uf = $estado;
                $visitante->ip_cep = $cep;
                $visitante->save();
            }

            $acesso = new AppAcesso;
            $acesso->visitante_id = $visitante->id;
            $acesso->app_id = $app->id;
            $acesso->save();

            return view("site.app", ["cliente" => $app, "visitante" => $visitante, "acesso" => $acesso]);
        }
        
    }

    public function click(Request $request){
        $click = new AppClick;
        $click->visitante_id = $request->visitante;
        $click->acesso_id = $request->acesso;
        if($request->is_elemento == "true"){
            $click->elemento = true;
            $click->rede = false;
            $click->elemento_id = $request->elemento;
        }else{
            $click->rede = true;
            $click->elemento = false;
            $click->tipo_rede = $request->tipo_rede;
        }
        $click->save();
        return response()->json("sucesso");
    }
}
