<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 50)->nullable();
            $table->string("email", 50)->nullable();
            $table->string("cidade", 40)->nullable();
            $table->string("telefone", 15)->nullable();
            $table->date("contrato")->nullable();
            $table->boolean("ativo")->default(true);
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
        Schema::dropIfExists('newslatters');
    }
}
