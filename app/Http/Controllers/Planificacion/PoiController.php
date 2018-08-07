<?php

namespace App\Http\Controllers\Planificacion;
use Illuminate\Support\Collection as Collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prog1;
use App\Prog2;
use App\Prog3;
use App\Prog4;
use App\Mes;

use App\Departamento;


class PoiController extends Controller
{
   public function ver()
   {
   		return  view("planificacion.poi.index");
   }

   public function prog1()
   {
         
   		return  view("planificacion.poi.prog1.index");
   }

   public function listadoProg1()
   {
         $prog1s=Prog1::all();
         $total=$prog1s->sum('monto');
         return view ("planificacion.poi.prog1.listado", compact('prog1s', 'total'));
   }

    public function prog2()
   {
        //Lista todos los meses que estan en la base de datos y al seleccionar envia por url el id del mes al metodo mes
        $meses=Mes::orderBy('id', 'ASC')->get();
        return  view("planificacion.poi.prog2.index", compact('meses'));
   }


   public function dptos(Request $request, $id)
   {
        
        //La idea es que este Metodo obtenga el id del mes y liste los valores matcheando con tabla prog2s del campo mes_id
        $dptoids=Departamento::orderBy('id','ASC')->get();
        return  view("planificacion.poi.prog2.dptos", compact('dptoids', 'mes'));
   }

   
   public function listadoProg2($request)
   {  
      //Necesito que imprima valores de la tabla prog2s matcheando mes_id con el id que recibio en el metodo dptos
      
      $prog2s=Prog2::where('dpto_id','=',$request)->get();
      
      if(!$prog2s){
         return "Algo salio mal";
      } 
      else
         {
            $total=$prog2s->sum('monto');
            /* $prog2=Prog2::where('dpto_id','=',$id);
             $progs2=$prog2->get();
             dd($prog2::departamento()->get());*/
             return  view ("planificacion.poi.prog2.listado", compact('prog2s', 'total','meses','dptos'));
          
       }
    }
   }

