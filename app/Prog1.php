<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prog1 extends Model
{
	protected  $connection= 'planificacion';
	
   	protected $fillable =['dpto_id','mes','rubro', 'monto'];

	public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

}
