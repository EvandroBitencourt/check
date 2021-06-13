<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->unsigned();
            $table->unsignedBigInteger('id_compra')->unsigned()->nullable();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anomodelo');
            $table->string('versao');
            $table->string('cambio');
            $table->string('combustivel');
            $table->string('direcao');
            $table->double('motor');
            $table->string('tipoveiculo');
            $table->double('km');
            $table->integer('portas');
            $table->integer('finalplaca');
            $table->boolean('airbag')->nullable();
            $table->boolean('alarme')->nullable();
            $table->boolean('arcondicionado')->nullable();
            $table->boolean('travaeletrica')->nullable();
            $table->boolean('vidroeletrico')->nullable();
            $table->boolean('som')->nullable();
            $table->boolean('sensorre')->nullable();
            $table->boolean('camerare')->nullable();
            $table->boolean('blindado')->nullable();
            $table->string('cor');
            $table->boolean('aceitatrocas')->nullable();
            $table->boolean('financiado')->nullable();
            $table->boolean('ipva')->nullable();
            $table->boolean('multas')->nullable();
            $table->boolean('leilao')->nullable();
            $table->boolean('unicodono')->nullable();
            $table->decimal('preco');
            $table->string('contato')->nullable();
            $table->time('tempo');
            $table->string('obs')->nullable();
            $table->timestamps();
            $table->boolean('status')->default(false);
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_compra')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
