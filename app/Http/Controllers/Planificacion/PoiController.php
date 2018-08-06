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
        $meses=Mes::all();
        return  view("planificacion.poi.prog2.index", compact('meses'));
   }


   public function dptos($id)
   {
        $dpto=Prog2::where('dpto_id','=',$id)->get();
        dd($dpto);

        return  view("planificacion.poi.prog2.dptos", compact('dptoids'));
   }

   
   public function listadoProg2($id)
   {  

    //Se puede pluck o value para imprimir un valor del array
      $dpto=Departamento::where('id','=',$id)->pluck('id', 'nombre');
      $prog2s=Prog2::where('dpto_id','=',$dpto)->get();

      if(!$prog2s){
         return "Algo salio mal";
      } 
      else
         {
            $total=$prog2s->sum('monto');
            /* $prog2=Prog2::where('dpto_id','=',$id);
             $progs2=$prog2->get();
             dd($prog2::departamento()->get());*/
             return  view ("planificacion.poi.prog2.listado", compact('prog2s', 'total','dpto'));
          
       }
    }
   }

