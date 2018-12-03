<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
     protected $fillable =[
    'nombre','administrativo_servicios_id','equipo_tecnologicos_id', 'talento_humanos_id', 'medicamento_insumos_id', 'responsables', 'expediente_nro', 'user_id'
    ];


    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    
    public function tthhs()
    {
    	return $this->belongsToMany(TalentoHumano::class, 'talento_humanos_id');
    }

    public function sers_adms()
    {
    	return $this->belongsToMany(ServicioAdm::class, 'administrativo_servicios_id');
    }

    public function meds_inms()
    {
    	return $this->belongsToMany(MedicamentoInsumo::class, 'medicamento_insumos_id');
    }

    public function eqs_tecns()
    {
    	return $this->belongsToMany(EquipoTecnlogico::class, 'equipo_tecnologicos_id');
    }

    
}
