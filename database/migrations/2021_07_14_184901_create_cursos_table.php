<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string("titulo")->nullable(); 
            $table->string("miniatura")->nullable();
            $table->string("banner")->nullable();
            $table->text("detalhes_resumo")->nullable();
            $table->text("detalhes_conteudo")->nullable();
            $table->text("programacao_resumo")->nullable();
            $table->text("programacao_conteudo")->nullable();
            $table->text("instrutores_resumo")->nullable();
            $table->text("instrutores_conteudo")->nullable();
            $table->text("local_resumo")->nullable();
            $table->text("local_conteudo")->nullable();
            $table->boolean("ativo")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
