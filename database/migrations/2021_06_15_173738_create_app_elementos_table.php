<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_elementos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("app_id")->nullable();
            $table->string("imagem")->nullable();
            $table->string("titulo")->nullable();
            $table->string("link")->nullable();
            $table->unsignedTinyInteger('posicao')->default(0);
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
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
        Schema::dropIfExists('app_elementos');
    }
}
