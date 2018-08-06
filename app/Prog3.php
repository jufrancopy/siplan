<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prog3 extends Model
{
    protected  $connection= 'planificacion';
   	protected $fillable =['dpto_id','mes','rubro', 'monto'];

	public function departamento()
    {
        return $this->hasOne('App\Departamento');
    }
}
