<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	protected  $connection= 'planificacion';
   protected $fillable =[
   	'nro_dpto','nombre','capital','superficie', 'poblacion', 'densidad'
   	];
}
