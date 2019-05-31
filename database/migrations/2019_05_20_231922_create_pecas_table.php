<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pecas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fornecedor_id');
            $table->string('nome');
            $table->string('imagem')->nullable();
            $table->integer('quantidade');
            $table->float('valor');
            $table->string('descricao');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors')->onDelete('cascade');
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
        Schema::dropIfExists('pecas');
    }
}
