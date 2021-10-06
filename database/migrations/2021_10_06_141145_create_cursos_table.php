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
            $table->string("nome")->nullable();
            $table->tinyInteger("tipo")->default(0);
            $table->tinyInteger("total_horas")->default(0);
            $table->boolean("certificacao")->default(false);
            $table->double("valor", 8, 2)->default(0);
            $table->string("thumbnail", 255)->nullable();
            $table->string("banner", 255)->nullable();
            
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
