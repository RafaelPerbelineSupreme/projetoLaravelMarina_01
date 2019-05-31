<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cidade_id');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->date('data_nascimento');
            $table->string('imagem')->nullable();
            $table->string('endereco');
            $table->string('telefone_1');
            $table->string('telefone_2');
            $table->string('usuario');
            $table->string('pass');
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
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
        Schema::dropIfExists('clientes');
    }
}
