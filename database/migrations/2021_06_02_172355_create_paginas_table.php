<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("titulo")->nullable();
            $table->string("descricao")->nullable();
            $table->string("palavras")->nullable();
            $table->timestamps();
        });

        $paginas = array(
            "Contato",
            "Cursos",
            "Diretoria",
            "Estaduais",
            "Estadual",
            "Home",
            "Notícia",
            "Notícias",
            "Login",
            "Cadastro",
            "Quem Somos",
            "Recuperar Senha",
            "Sommelier"
        );

        foreach($paginas as $pagina){
            DB::table('paginas')->insert([
                'nome' => $pagina,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas');
    }
}
