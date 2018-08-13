<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\General\DepartamentoStoreRequest;
use App\Http\Requests\General\DepartamentoUpdateRequest;

use Datatables;
use App\Departamento;

class DepartamentoController extends Controller
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

        $departamentos=Departamento::orderBy('id', 'DESC')->paginate(50);       
        
        return view ('general.departamentos.index', compact('departamentos'));
    }

     public function listadoDptoindex()
    {
        return Datatables::of(Departamento::query())->make(true);

    }

    public function listadoDptocreate()
    {
        return view('general.departamentos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('general.departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoStoreRequest $request)
    {
        
        $departamento=Departamento::create($request->all());

        return redirect()->route('departamentos.edit', $departamento->id)
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
        $departamento=departamento::find($id);
        return view('general.departamentos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento=Departamento::find($id);
        return view('general.departamentos.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartamentoUpdateRequest $request, $id)
    {
        $departamento=Departamento::find($id);
        $departamento->fill($request->all())->save();
        
        return redirect()->route('departamentos.edit', $departamento->id)
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
        $departamento= Departamento::find($id)->delete(); 
        return back()->with ('info','Eliminada con éxito');
    }
}
