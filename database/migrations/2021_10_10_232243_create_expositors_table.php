<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpositorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expositors', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100)->nullable();
            $table->string("site")->nullable();
            $table->string("telefone", 20)->nullable();
            $table->string("email", 100)->nullable();
            $table->string("foto")->nullable();
            $table->tinyInteger("categoria")->nullable();
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
        Schema::dropIfExists('expositors');
    }
}
