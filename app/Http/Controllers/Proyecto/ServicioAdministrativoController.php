<?php

namespace App\Http\Controllers\Proyecto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;

use App\Http\Requests\Proyecto\ServicioAdministrativoStoreRequest;
use App\Http\Requests\Proyecto\ServicioAdministrativoUpdateRequest;

use App\AdministrativoServicio;


class ServicioAdministrativoController extends Controller
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
        $serviciosadministrativos=AdministrativoServicio::orderBy('id', 'DESC')->paginate(50);       
        
        return view ('proyecto.servs_adms.index', compact('serviciosadministrativos'));
    }


    public function pdf()
    {        
        
        //Codigo con Vista previa en navegador de archivo PDF
        
        $items = AdministrativoServicio::all();
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
        return view ('proyecto.servs_adms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicioAdministrativoStoreRequest $request)
    {
        $servicioadministrativo=AdministrativoServicio::create($request->all());

        return redirect()->route('servs_adms.edit', $servicioadministrativo->id)
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
        $servicioadministrativo=AdministrativoServicio::find($id);
        return view('proyecto.servs_adms.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicioadministrativo=AdministrativoServicio::find($id);
        return view('proyecto.servs_adms.edit', compact('servicioadministrativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicioAdministrativoUpdateRequest $request, $id)
    {
        $servicioadministrativo=AdministrativoServicio::find($id);
        $servicioadministrativo->fill($request->all())->save();
        
        return redirect()->route('proyecto.servs_adms.edit', $servicioadministrativo->id)
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
        $servicioadministrativo= AdministrativoServicio::find($id)->delete(); 
        return back()->with ('info','Eliminada $servicioadministrativo con éxito');
    }
}
