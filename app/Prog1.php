<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prog1 extends Model
{
	protected  $connection= 'diplan_planificacion';
	
   	protected $fillable =['dpto_id','mes','rubro', 'monto'];

	public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

}
