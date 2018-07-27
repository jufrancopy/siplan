<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrativo_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item',128);
            $table->float('costo');
            $table->enum('tipo',['util','mobiliario', 'tercerizado'])->default('tercerizado');
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
        Schema::dropIfExists('administrativo_servicios');
    }
}
