<?php

namespace App\Http\Controllers\Proyecto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MedicamentoInsumo; 

class MedicamentoInsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $med_inms=MedicamentoInsumo::orderBy('id', 'DESC')->paginate(10);       
        
        return view ('proyecto.med_inms.index', compact('med_inms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $med_inm=MedicamentoInsumo::orderBy('id', 'ASC')->get();
       
       return view ('proyecto.med_inms.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $med_inm=MedicamentoInsumo::create($request->all());

        return redirect()->route('med_inms.edit', $med_inm->id)
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
        $med_inm=MedicamentoInsumo::find($id);
        return view('proyecto.med_inms.show', compact('med_inm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $med_inm=MedicamentoInsumo::find($id);
         //dd($med_inm); 

        return view('proyecto.med_inms.edit', get_defined_vars());
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
        $med_inm=MedicamentoInsumo::find($id);
        $med_inm->fill($request->all())->save();
        
        return redirect()->route('med_inms.index', $med_inm->id)
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
        $med_inm= MedicamentoInsumo::find($id)->delete(); 
        return back()->with ('info','Eliminada' .$med_inm. 'con éxito');
    }
}
