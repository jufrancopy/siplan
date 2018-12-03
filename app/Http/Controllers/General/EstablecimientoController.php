<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\General\EstablecimientoStoreRequest;
use App\Http\Requests\General\EstablecimientoUpdateRequest;

use App\Establecimiento;
use App\Nivel;
use App\Anho;
use App\Mes;
use App\Departamento;
use App\Ciudad;


class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $establecimientos=Establecimiento::orderBy('id', 'ASC')->paginate(10);

        return view ('general.establecimientos.index', compact('establecimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::orderBy('nombre', 'ASC')->pluck('nombre','id');
        $ciudades = Ciudad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $niveles = Nivel::orderBy('nombre', 'ASC')->pluck('nombre','id');
        $anhos = Anho::orderBy('id', 'ASC')->pluck('anho', 'id');
        $meses = Mes::pluck('id','mes');

        return view ('general.establecimientos.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstablecimientoStoreRequest $request)
    {

        $establecimiento=Establecimiento::create($request->all());
        return redirect()->route('establecimientos.index', $establecimiento->id)
                        ->with ('info','Agreda con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $establecimientos=Establecimiento::find($id);
        return view('general.establecimientos.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $establecimiento=Establecimiento::find($id);
        $departamentos = Departamento::orderBy('nombre', 'ASC')->pluck('nombre','id');
        $ciudades = Ciudad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $niveles = Nivel::orderBy('nombre', 'ASC')->pluck('nombre','id');
        $anhos = Anho::orderBy('id', 'ASC')->pluck('anho', 'id');
        $meses = Mes::pluck('id','mes');

        return view('general.establecimientos.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstablecimientoUpdateRequest $request, $id)
    {
        $establecimiento=Establecimiento::find($id);
        $establecimiento->fill($request->all())->save();
        
        return redirect()->route('establecimientos.index', $establecimiento->id)
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
        $establecimiento= Establecimiento::find($id)->delete(); 
        return back()->with ('info','Eliminada con éxito');
    }
}
