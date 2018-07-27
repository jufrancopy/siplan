<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_costos', function (Blueprint $table) {
           $table->increments('id');
            $table->string('nombre',128);
            $table->integer('user_id')->unsigned();
            $table->integer('idProyectos')->unsigned();
            $table->integer('idTalentosHumanos')->unsigned();
            $table->integer('idServiciosAdministrativos')->unsigned();
            $table->integer('idMedicamentosInsumos')->unsigned();
             $table->integer('idEquiposTecnologicos')->unsigned();
            $table->integer('idInfraestructuras')->unsigned();
            $table->timestamps();

            //Relacion de las tablas
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onCascade('cascade');

            $table->foreign('idProyectos')->references('id')->on('proyectos')
                ->onDelete('cascade')
                ->onCascade('cascade');    

            $table->foreign('idTalentosHumanos')->references('id')->on('talento_humanos')
                ->onDelete('cascade')
                ->onCascade('cascade');

            $table->foreign('idServiciosAdministrativos')->references('id')->on('administrativo_servicios')
                ->onDelete('cascade')
                ->onCascade('cascade');

            $table->foreign('idMedicamentosInsumos')->references('id')->on('medicamento_insumos')
                ->onDelete('cascade')
                ->onCascade('cascade');

            $table->foreign('idEquiposTecnologicos')->references('id')->on('equipo_tecnologicos')
                ->onDelete('cascade')
                ->onCascade('cascade');    
                
            $table->foreign('idInfraestructuras')->references('id')->on('infraestructuras')
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
        Schema::dropIfExists('proyecto_costos');
    }
}
