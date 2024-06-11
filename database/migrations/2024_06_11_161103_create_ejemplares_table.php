<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjemplaresTable extends Migration
{
    public function up()
    {
        Schema::create('ejemplares', function (Blueprint $table) {
            $table->id('codigo');
            $table->unsignedBigInteger('libro_codigo');
            $table->string('localizacion');
            $table->timestamps();

            $table->foreign('libro_codigo')->references('codigo')->on('libros');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ejemplares');
    }
}