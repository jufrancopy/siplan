<?php

namespace App\Http\Controllers\Proyecto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MedicamentoInsumo;
use App\AdministrativoServicio;
use App\TalentoHumano;
use App\Infraestructura;
use App\EquipoTecnologico;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipotecnlogicos=EquipoTecnologico::get();
        return view('proyecto.proyectos.index', compact($equipotecnlogicos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$administrativo_servicios = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $administrativo_servicios       = AdministrativoServicio::orderBy('item', 'ASC')->get();
        $equipo_tecnologicos            = EquipoTecnologico::orderBy('item', 'ASC')->get();
        $talento_humanos                = TalentoHumano::orderBy('item', 'ASC')->get();
        $medicamento_insumos            = MedicamentoInsumo::orderBy('item', 'ASC')->get();
        return view ('proyecto.proyectos.create', get_defined_vars());   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
