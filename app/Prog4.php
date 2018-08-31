<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prog4 extends Model
{
    protected  $connection= 'diplan_planificacion';
   	protected $fillable =['dpto_id','mes','rubro', 'monto'];

	public function departamento()
    {
        return $this->hasOne('App\Departamento');
    }
}
