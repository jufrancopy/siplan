<?php

namespace App\Http\Controllers\Proyecto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Area;

class AreaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $areas=Area::orderBy('id', 'DESC')->paginate(10);
     return view ('proyecto.areas.index', compact('areas'));
    }

    public function graf_areas (){
        $areas = Area::groupBy('sector')
            ->selectRaw('count(*) as total, sector')
            ->get();
            
            return view ('proyecto.areas.grafico', compact('areas')); 
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view ('proyecto.areas.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area=Area::create($request->all());

        return redirect()->route('areas.index', $area->id)
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
        $area=Area::find($id);
        return view('proyecto.areas.edit', compact('area'));
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
        $area=Area::find($id);
        $area->fill($request->all())->save();
        
        return redirect()->route('areas.index', $area->id)
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
        $area= Area::find($id)->delete(); 
        return back()->with ('info','Eliminada con éxito');
    }
}
