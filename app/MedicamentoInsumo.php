<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicamentoInsumo extends Model
{
	
    protected $fillable =[
   	'item','tipo','costo'
   	];
}
