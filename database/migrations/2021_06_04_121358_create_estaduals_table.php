<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estaduals', function (Blueprint $table) {
            $table->id();
            $table->string("foto")->nullable();
            $table->string("nome", 100)->nullable();
            $table->string("telefone", 16)->nullable();
            $table->string("whatsapp", 16)->nullable();
            $table->string("whatsapp", 10)->nullable();
            $table->string("email", 100)->nullable();
            $table->string("site")->nullable();
            $table->string("instagram")->nullable();
            $table->string("facebook")->nullable();
            $table->text("sobre")->nullable();
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
        Schema::dropIfExists('estaduals');
    }
}
