<?php

namespace App\Http\Controllers\Proyecto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Proyecto\TalentoHumanoStoreRequest;
use App\Http\Requests\Proyecto\TalentoHumanoUpdateRequest;
use App\TalentoHumano; 

class TalentoHumanoController extends Controller
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
        $tls_hs=TalentoHumano::orderBy('id', 'DESC')->paginate(50);       
        
        return view ('proyecto.tls_hs.index', compact('tls_hs'));
    }


    public function pdf()
    {        
        
        //Codigo con Vista previa en navegador de archivo PDF
        
        $items = TalentoHumano::all();
        $total=$items->sum('costo');
        $view =  \View::make('proyecto.pdf.products', compact('items', 'total'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('products');
        
        //Codigo que realiza Descarga directa de PDF
       /* $pdf = PDF::loadView('proyecto.pdf.products', compact('products'));
        return $pdf->download('listado.pdf');*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('proyecto.tls_hs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TalentoHumanoStoreRequest $request)
    {
        $tl_h=TalentoHumano::create($request->all());

        return redirect()->route('tls_hs.index', $tl_h->id)
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
        $tl_h=TalentoHumano::find($id);
        return view('proyecto.tls_hs.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tl_h=TalentoHumano::find($id);
        return view('proyecto.tls_hs.edit', compact('tl_h'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TalentoHumanoUpdateRequest $request, $id)
    {
        $tl_h=TalentoHumano::find($id);
        $tl_h->fill($request->all())->save();
        
        return redirect()->route('tls_hs.edit', $tl_h->id)
                ->with ('info','Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tl_h= TalentoHumano::find($id)->delete(); 
        return back()->with ('info','Eliminada con éxito');
    }
}
