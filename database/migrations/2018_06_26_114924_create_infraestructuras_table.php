<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraestructurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructuras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item',128);
            $table->float('costo');
            $table->float('dimension');
            $table->float('ubicacion');
            $table->enum('tipo',['nueva','readecuacion', 'read_ampl'])->default('nueva');
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
        Schema::dropIfExists('infraestructuras');
    }
}
