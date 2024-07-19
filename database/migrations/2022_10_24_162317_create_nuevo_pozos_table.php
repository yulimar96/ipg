<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNuevoPozosTable extends Migration
{
    
    public function up()
    {
        Schema::create('nuevo_pozos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_pozo');
            $table->string('fperforacion');
            $table->string('administrado');
            $table->string('produccion');
            $table->string('habitantes_beneficiados');
            $table->string('estado');
            $table->string('municipio');
            $table->string('parroquia');
            $table->string('sector');
            $table->string('hpmotor');
            $table->string('voltaje');
            $table->string('tipovoltaje');
            $table->string('modelo');
            $table->string('hpbomba');
            $table->integer('caudal'); 
            $table->integer('altura');
            $table->integer('diametro');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('nuevo_pozos');
    }
}

