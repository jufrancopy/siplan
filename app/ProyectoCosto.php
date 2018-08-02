<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoCosto extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function proyecto()
    {
    	return $this->belongsToMany('App\Proyecto');
    }

    public function tthhs()
    {
    	return $this->hasMany('App\TalentoHumano');
    }

    public function sers_adms()
    {
    	return $this->hasMany('App\ServicioAdm');
    }

    public function meds_inms()
    {
    	return $this->hasMany('App\MedicamentoInsumo');
    }

    public function eqs_tecns()
    {
    	return $this->hasMany('App\EquipoTecnlogico');
    }

    
    public function infrs()
    {
    	return $this->hasMany('App\Infraestructura');
    }
}

