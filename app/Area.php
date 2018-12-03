<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable =[
	   	'sector','subsector','area_funcional'
	   	];
	protected  $table= 'areas';
}
