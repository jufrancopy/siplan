<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	protected  $connection= 'diplan_globales';
   	protected $fillable =[
   	'nro_dpto','nombre','capital','superficie', 'poblacion', 'densidad'
   	];


   	public function prog2s()
    {
    	//hasMany= prog2s tiene muchos departamentos
        return $this->hasMany(Prog2::class, 'dpto_id');
    }
}
