<?php

namespace App\Http\Controllers\Proyecto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;

use App\Http\Requests\Proyecto\EquipoTecnologicoStoreRequest;
use App\Http\Requests\Proyecto\EquipoTecnologicoUpdateRequest;

use App\EquipoTecnologico;

class EquipoTecnologicoController extends Controller
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
        $equipostecnologicos=EquipoTecnologico::orderBy('id', 'DESC')->paginate(10);
        return view ('proyecto.eqs_tecns.index', compact('equipostecnologicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('proyecto.eqs_tecns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipoTecnologicoStoreRequest $request)
    {
        $equipotecnologico=EquipoTecnologico::create($request->all());

        return redirect()->route('eqs_tecns.edit', $equipotecnologico->id)
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
        $EquipoTecnologico=EquipoTecnologico::find($id);
        return view('proyecto.eqs_tecns.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipotecnologico=EquipoTecnologico::find($id);
        return view('proyecto.eqs_tecns.edit', compact('equipotecnologico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipoTecnologicoUpdateRequest $request, $id)
    {
        $equipotecnologico=EquipoTecnologico::find($id);
        $equipotecnologico->fill($request->all())->save();
        
        return redirect()->route('eqs_tecns.edit', $equipotecnologico->id)
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
        $equipotecnologico= EquipoTecnologico::find($id)->delete(); 
        return back()->with ('info','Eliminada $equipotecnologico con éxito');
    }
}
