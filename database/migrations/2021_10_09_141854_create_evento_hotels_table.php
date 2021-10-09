<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("evento_id");
            $table->string("nome")->nullable();
            $table->string("endereco")->nullable();
            $table->string("url")->nullable();
            $table->string("foto")->nullable();
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
        Schema::dropIfExists('evento_hotels');
    }
}
