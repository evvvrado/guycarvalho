<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Depoimento;
use Illuminate\Support\Facades\Storage;

class DepoimentoController extends Controller
{
    //

    
    public function editar(){
        return view("painel.depoimento.editar");
    }
    
    public function cadastrar(){
        return view("painel.depoimento.cadastrar");
    }

    public function salvar(Request $request){
        if($request->depoimento_id){
            $depoimento = Depoimento::find($request->depoimento_id);
        }else{
            $depoimento = new Depoimento;
        }

        $depoimento->nome = $request->nome;
        $depoimento->depoimento = $request->depoimento;
        
        if($request->file("foto")){
            Storage::delete($depoimento->foto);
            $depoimento->foto = $request->file('foto')->store(
                'site/imagens/depoimentos/', 'local'
            );
        }

        $depoimento->save();

        toastr()->success("Depoimento salvo com sucesso!");

        return redirect()->route("painel.depoimento");
    }

    public function consultar(Request $request){
        if($request->isMethod('get')){
            $depoimentos = Depoimento::all();
            return view("painel.depoimento.consultar", ['depoimentos' => $depoimentos]);
        }else{
            // $filtros = [];
            // if($request->nome != null){
            //     $filtros[] = ["nome", "like", "%" . $request->nome . "%"];
            // }
            // if($request->tipo != null && $request->tipo != -1){
            //     $filtros[] = ["tipo", "=", $request->tipo];
            // }
            // if($request->total_horas != null){
            //     $filtros[] = ["total_horas", "=", $request->total_horas];
            // }
            // if($request->valor_minimo != null){
            //     $filtros[] = ["valor", ">=", $request->valor_minimo];
            // }
            // if($request->valor_maximo != null){
            //     $filtros[] = ["valor", "<=", $request->valor_maximo];
            // }
            // $cursos = Curso::where($filtros)->get();
            // return view("painel.cursos.consultar", ['cursos' => $cursos, "filtros" => $request->all()]);
        }
    }

    public function deletar(Depoimento $depoimento){
        Storage::delete($depoimento->foto);
        $depoimento->delete();
        toastr()->success("Depoimento removido com sucesso!");
        return redirect()->back();
    }

}
