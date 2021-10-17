<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("aluno_id");
            $table->unsignedBigInteger("carrinho_id");
            $table->string("codigo", 16);
            $table->double("total")->default(0);

            // 0 => Boleto
            // 1 => Cartao
            // 2 => Carnê
            $table->tinyInteger("forma")->default(0);

            // 0 => Gerencianet
            // 1 => Cielo
            $table->tinyInteger("gateway")->default(0);

            $table->tinyInteger("parcelas")->default(1);
            $table->double("valor_parcela")->default(0);
            $table->double("desconto", 5, 2)->default(0);

            // 0 => Aguardando Pagamento
            // 1 => Pagamento Confirmado
            // 2 => Cancelado
            $table->tinyInteger("status")->default(0);
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('carrinho_id')->references('id')->on('carrinhos')->onDelete('cascade');
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
        Schema::dropIfExists('vendas');
    }
}
