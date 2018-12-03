<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEvaluacion extends Model
{
    protected $fillable =[
   	'nombre'
   	];

   	protected  $connection= 'diplan_planificacion';
   	protected  $table= 'tipos_evaluaciones';
 	

 	public function user(){
   		return $this->belongsTo(User::class);
   	}


}
