<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProg2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('planificacion')->create('prog2s', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('dpto_id')->unsigned();
            $table->string('mes', 60);
            $table->integer('rubro');
            $table->integer('monto');
            $table->timestamps();

            //Relaciones 
            $table->foreign('dpto_id')->references('id')->on('departamentos')
                ->onDelete('cascade')
                ->onCascade('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prog2s');
    }
}
