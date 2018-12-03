<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubGerencia extends Model
{
    protected  $connection= 'diplan_globales';  
    public function gerencias()
    {
    
        return $this->belongsTo(Gerencia::class);
    }

    public function organigramas()
    {
    	
        return $this->belongsTo(Organigrama::class);
    }
}
