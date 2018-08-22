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
       return $this->hasOne(Departamento::class, 'id', 'dpto_id');
       /*return $this->belongsTo(Departamento::class, 'id');*/


    }

    public function mes()
    {
    	//hasMany= prog2s tiene muchos departamentos
        return $this->belongsTo(Mes::class);
    }
}
