<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    
    protected $fillable =[
   	'item','tipo','costo', 'dimension', 'ubicacion'
   	];
}
