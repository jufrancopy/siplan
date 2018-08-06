<?php

namespace App\Planificacion;

use Illuminate\Database\Eloquent\Model;

class Poi extends Model
{

    protected  $connection= 'planificacion';

    protected $fillable =[
   	'dpto_id','mes','rubro', 'monto'
   	];

   	public function departamento()
    {
        return $this->hasOne('App\Departamento');
    }
    
}
