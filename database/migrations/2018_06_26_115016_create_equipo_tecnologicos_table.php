<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTecnologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_tecnologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item',128);
            $table->float('costo');
            $table->enum('tipo',['biomedico','informatico'])->default('biomedico');
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
        Schema::dropIfExists('equipo_tecnologicos');
    }
}
