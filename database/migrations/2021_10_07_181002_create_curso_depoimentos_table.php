<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDepoimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_depoimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("curso_id");
            $table->string("nome", 100)->nullable();
            $table->text("depoimento")->nullable();
            $table->string("foto", 255)->nullable();
            $table->timestamps();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_depoimentos');
    }
}
