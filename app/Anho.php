<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anho extends Model
{
     protected  $connection= 'diplan_globales';
     protected  $table= 'anhos';
    
    public function evaluaciones(){
         return $this->belongsTo(Evaluacion::class);
      }
}
