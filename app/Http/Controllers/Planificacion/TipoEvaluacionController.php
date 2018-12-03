<?php

namespace App\Http\Controllers\Planificacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\TipoEvaluacion;

class TipoEvaluacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipoevaluaciones= TipoEvaluacion::orderBy('id', 'ASC')->paginate(10);
      return view("planificacion.evaluaciones.tipo_evaluaciones.index", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('planificacion.evaluaciones.tipo_evaluaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoevaluacion=TipoEvaluacion::create($request->all());

        return redirect()->route('tipo_evaluaciones.index')
                        ->with ('info','Tipo de Evaluacion insetarda en la Base de Datos');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoevaluacion=TipoEvaluacion::find($id);
        return view("planificacion.evaluaciones.tipo_evaluaciones.show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoevaluacion=TipoEvaluacion::find($id);
            return view("planificacion.evaluaciones.tipo_evaluaciones.edit", get_defined_vars());
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
        $tipoevaluacion=TipoEvaluacion::find($id);
        $tipoevaluacion->fill($request->all())->save();
        
        return redirect()->route('tipo_evaluaciones.index')
                ->with ('info','Actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tipoevaluacion=TipoEvaluacion::find($id);
             return view("planificacion.evaluaciones.tipo_evaluaciones.index", get_defined_vars());
    }
}
