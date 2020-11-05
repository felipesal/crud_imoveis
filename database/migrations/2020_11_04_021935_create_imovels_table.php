<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->string('logradouro');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('cep');
            $table->string('cidade');
            $table->float('preco');
            $table->integer('qtdQuartos');
            $table->enum('tipo', ['apartamento', 'casa', 'kitnet']);
            $table->enum('finalidade', ['venda', 'aluguel']);
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
        Schema::dropIfExists('imoveis');
    }
}
