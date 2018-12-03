<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable =[
   	'item','tipo_reportes_id','	beneficiado', 'condicion', 'total', 'actividades', 'anho', 	'subgerencia_id'
   	];

   	protected  $connection= 'diplan_planificacion';
 	protected  $table= 'reportes';

   	public function anhos(){
   		return $this->belongsTo(Anho::class, 'subgerencia_id');
   	}
}
