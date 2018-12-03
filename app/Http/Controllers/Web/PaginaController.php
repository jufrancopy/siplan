<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AdministrativoServicio;
use App\Establecimiento;
use App\Area;



class PaginaController extends Controller
{
    public function publico(){
    	$establecimientos=Establecimiento::orderBy('id', 'DESC')->paginate(10);
    	$th=Establecimiento::where('nivel_id', '=', 1)->count();
    	$thr=Establecimiento::where('nivel_id', '=', 2)->count();
    	$tus=Establecimiento::where('nivel_id', '=', 3)->count();
    	$tcp=Establecimiento::where('nivel_id', '=', 4)->count();
    	$tps=Establecimiento::where('nivel_id', '=', 5)->count();
    	$tc=Establecimiento::where('nivel_id', '=', 6)->count();
        $areas = Area::groupBy('sector')
            ->selectRaw('count(*) as total, sector')
            ->get();
    	
		return view ('web.publico', get_defined_vars());
    }
}
