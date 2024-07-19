<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParroquiasTable extends Migration
{

    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('id_municipios')->unsigned();
            $table->foreign('id_municipios')->references('id')->on('municipios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parroquias');
    }
}
