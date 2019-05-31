<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbarcacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarcacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('funcionario_id')->nullable();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('modelo_id');
            $table->string('identificacao');
            $table->string('imagem')->nullable();
            $table->integer('ano');
            $table->float('valor_mensalidade');
            $table->string('descricao');
            $table->float('valor_embarcacao');
            $table->date('data_da_compra');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('cascade');
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
        Schema::dropIfExists('embarcacaos');
    }
}
