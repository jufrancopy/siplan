<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AdministrativoServicio;



class PaginaController extends Controller
{
    public function publico(){
		$serviciosadministrativos=AdministrativoServicio::orderBy('id', 'DESC')->paginate(3);    	
    	return view ('web.publico', compact('serviciosadministrativos'));
    }
}
