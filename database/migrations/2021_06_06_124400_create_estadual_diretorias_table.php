<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadualDiretoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadual_diretorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("estadual_id");
            $table->string("cargo", 50);
            $table->string("nome", 100);
            $table->tinyInteger("ordem")->default(1);
            $table->timestamps();
            $table->foreign('estadual_id')->references('id')->on('estaduals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadual_diretorias');
    }
}
