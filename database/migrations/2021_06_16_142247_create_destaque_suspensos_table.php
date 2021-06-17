<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestaqueSuspensosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destaque_suspensos', function (Blueprint $table) {
            $table->id();
            $table->boolean("ativo")->default(true);
            $table->string("imagem")->nullable();
            $table->string("titulo")->nullable();
            $table->text("descricao")->nullable();
            $table->date("inicio")->nullable();
            $table->date("fim")->nullable();
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
        Schema::dropIfExists('destaque_suspensos');
    }
}
