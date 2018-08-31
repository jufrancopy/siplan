<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected  $connection= 'diplan_globales';
    /*protected  $table= 'nivels';*/

    public function dependencia(){
 	return $this->hasOne(Dependencia::class, 'id'); 	
 	}
}
