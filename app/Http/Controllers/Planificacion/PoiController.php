<?php

namespace App\Http\Controllers\Planificacion;
use Illuminate\Support\Collection as Collection;
use Barryvdh\DomPDF\Facade as PDF;

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


   public function dptos($idmes)
   {
        $idmes = Mes::find($idmes);
        /*dd($idmes);*/
        //La idea es que este Metodo obtenga el id del mes y liste los valores matcheando con tabla prog2s del campo mes_id
        $iddptos=Departamento::orderBy('id','ASC')->get();
        return  view("planificacion.poi.prog2.dptos", compact('iddptos', 'idmes'));
   }

   /*public function listadoProg2($idmes, $idd){
      dd($idmes);
      $idmes = Mes::find($idmes);
      $iddpto = Departamento::find($iddpto);

      view("agregar_organizador2",array("idguest"=>$idguest,"idbook"=>$idbook,"idroom"=>$idroom));     
    }*/
  public function listadoProg2($idmes, $iddpto)
   {  

      $prog2s=Prog2::where('dpto_id','=',$iddpto)->where('mes_id','=',$idmes)->get();
      $nombreDpto=Departamento::where('id','=',$iddpto)->get();
      $nombreMes=Mes::where('id','=',$idmes)->get();
      if(!$prog2s){
         return "Algo salio mal";
      } 
      else
         {
            $total=$prog2s->sum('monto');
            
            return  view ("planificacion.poi.prog2.listado", compact('prog2s', 'total','dptos','nombreDpto','nombreMes'));
          }
    }

    public function pdf($idmespdf, $iddptopdf)
    { 
      
      $nombreDpto=Departamento::where('id','=',$idmespdf)->get();
      $nombreMes=Mes::where('id','=',$idmespdf)->get();      
      $prog2s=Prog2::where('dpto_id','=',$iddptopdf)->where('mes_id','=',$idmespdf)->get();
      $datos = [];
      foreach ($prog2s as $value) {
            $datos[] = [
              'dpto'  => $value->departamento->nombre,
              'mes'  =>  $value->mes->mes,
              'rubro' =>  $value->rubro,
              'monto' =>  $value->monto,
              'row'=>$value->count('rubro')
          ];
        }

        $rowDpto = 0;
        $rowMes = 0;
        $table = "<table border=1>";

        foreach($datos as $dato) {
          $rowDpto ++;
          $rowMes ++;

          $table .= "<tr>";
          
          $table .= ($rowDpto == 1) ? "<td rowspan='%s'> Mes </td>": "";
          $table .= ($rowMes == 1) ? "<td rowspan='%s'>".{{ $dato['dpto'] }}. "</td>": "";
          $table .= "<td>rubro</td>";
          $table .= "<td>monto</td>";
          $table .= "</tr>";
        }

        $table .= "</table>";

        printf($table, $rowDpto, $rowMes);
        exit;

        


        /*print_r($row);
        exit;*/
        
        $total=$prog2s->sum('monto');


        $view =  \View::make('planificacion.pdf.prog2s', compact('datos','total','prog2s','nombreDpto','nombreMes' ));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('prog2s');
          }
        }

