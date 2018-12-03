<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organigrama extends Model
{
    protected  $connection= 'diplan_globales';

    public function gerencias()
    {
    	
        return $this->belongsTo(Gerencia::class);
    }

    public function subgerencias()
    {
    	
        return $this->belongsTo(SubGerencia::class);
    }
}


