<?php

namespace App\Http\Controllers\Proyecto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;

use App\Http\Requests\Proyecto\InfraestructuraStoreRequest;
use App\Http\Requests\Proyecto\InfraestructuraUpdateRequest;

use App\Infraestructura;

class InfraestructuraController extends Controller
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
        $infraestructuras=Infraestructura::orderBy('id', 'DESC')->paginate(50);       
        
        return view ('proyecto.infraestructuras.index', compact('infraestructuras'));
    }

    public function pdf()
    {        
        
        //Codigo con Vista previa en navegador de archivo PDF
        
        $items = Infraestructura::all();
        $total=$items->sum('costo');
        $view =  \View::make('proyecto.pdf.infraestructura', compact('items', 'total'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('products');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('proyecto.infraestructuras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfraestructuraStoreRequest $request)
    {
        $infraestructura=Infraestructura::create($request->all());

        return redirect()->route('infraestructuras.edit', $infraestructura->id)
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
        $infraestructura=Infraestructura::find($id);
        return view('proyecto.infraestructuras.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infraestructura=Infraestructura::find($id);
        return view('proyecto.infraestructuras.edit', compact('infraestructura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InfraestructuraUpdateRequest $request, $id)
    {
        $infraestructura=Infraestructura::find($id);
        $infraestructura->fill($request->all())->save();
        
        return redirect()->route('infraestructuras.edit', $infraestructura->id)
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
        $infraestructura= Infraestructura::find($id)->delete(); 
        return back()->with ('info','Eliminada  con éxito');
    }
}


