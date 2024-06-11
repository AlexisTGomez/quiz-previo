<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSacasTable extends Migration
{
    public function up()
    {
        Schema::create('sacas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_codigo');
            $table->unsignedBigInteger('ejemplar_codigo');
            $table->timestamps();

            $table->foreign('usuario_codigo')->references('codigo')->on('usuarios');
            $table->foreign('ejemplar_codigo')->references('codigo')->on('ejemplares');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sacas');
    }
}