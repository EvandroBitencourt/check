<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_carros')->unsigned();
            $table->binary('principal');
            $table->binary('adicional01')->nullable();
            $table->binary('adicional02')->nullable();
            $table->binary('adicional03')->nullable();
            $table->binary('adicional04')->nullable();
            $table->binary('adicional05')->nullable(); 
            $table->timestamps();

            $table->foreign('id_carros')->references('id')->on('carros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagens');
    }
}
