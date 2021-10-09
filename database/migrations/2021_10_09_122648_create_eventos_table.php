<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("nome")->nullable();
            $table->string("slug")->nullable();
            $table->string("descricao")->nullable();
            $table->string("titulo")->nullable();
            $table->text("sobre")->nullable();
            $table->date("inicio")->nullable();
            $table->date("fim")->nullable();
            $table->string("video")->nullable();
            $table->string("thumbnail")->nullable();
            $table->string("banner")->nullable();
            $table->boolean("ativo")->default(false);
            $table->boolean("clinica")->default(false);
            $table->string("local_nome")->nullable();
            $table->string("local_endereco")->nullable();
            $table->string("local_foto")->nullable();
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
        Schema::dropIfExists('eventos');
    }
}
