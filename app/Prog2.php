<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prog2 extends Model
{
 	protected  $connection= 'planificacion';
 	protected  $table= 'prog2s';
   	protected $fillable =['dpto_id','mes','rubro', 'monto'];

	public function departamento()
    {
    	//hasMany= prog2s tiene muchos departamentos
        return $this->hasMany('App\Departamento');
    }
}
