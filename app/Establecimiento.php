<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
	protected  $connection= 'diplan_globales';

	protected $fillable=['nombre', 
						 'tipo',
						 'anho_id', 
						 'dpto_id', 
						 'ciudad_id',
						 'cantidad',
						 'nivel_id'	
						];

public function anho(){
 	return $this->hasOne(Anho::class, 'id', 'anho_id'); 	
 	}

 public function mes(){
 	return $this->belongsTo(Mes::class);
 	}

public function departamento(){
 	return $this->hasOne(Departamento::class, 'id', 'dpto_id'); 	
 	}

public function ciudad(){
 	return $this->belongsTo(Ciudad::class, 'id'); 	 	
	}

public function nivel(){
 	return $this->hasOne(Nivel::class, 'id', 'nivel_id'); 	 	
	}
}
