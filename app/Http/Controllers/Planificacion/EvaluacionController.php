<?php

namespace App\Http\Controllers\Planificacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evaluacion;
use App\Area;
use DB;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluaciones=Evaluacion::orderBy('id', 'ASC')->paginate(10);
        $capacitaciones=Evaluacion::where('tipo_evaluacion_id', '=', 1)->count();
        $incorporaciones=Evaluacion::where('tipo_evaluacion_id', '=', 4)->count();
        $incorporaciones=Evaluacion::where('tipo_evaluacion_id', '=', 4)->count();
        $items = Evaluacion::groupBy('tipo_evaluacion_id')
            ->selectRaw('count(*) as total, tipo_evaluacion_id')
            ->get();

          $capacitaciones_graf=Evaluacion::select('item', 'total', 'tipo_evaluacion_id', 'anho_id')
            ->where('tipo_evaluacion_id', 1)
            ->groupBy('item','total','tipo_evaluacion_id','anho_id')
            ->orderBy('anho_id')
            ->get();

          
         
         //dd($capacitaciones_graf);  
       
        return view("planificacion.evaluaciones.index", get_defined_vars());
    }

    public function listar(){
        $evaluaciones=Evaluacion::orderBy('id', 'ASC')->paginate(10);
        return view("planificacion.evaluaciones.listar", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('planificacion.evaluaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
