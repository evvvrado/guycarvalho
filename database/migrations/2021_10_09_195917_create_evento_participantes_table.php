<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_participantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("evento_id");
            $table->string("nome", 100)->nullable();
            $table->string("url")->nullable();

            // 0 => Embaixador
            // 1 => Convidado
            $table->tinyInteger("tipo")->nullable();
            $table->string("foto");
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
        Schema::dropIfExists('evento_participantes');
    }
}
