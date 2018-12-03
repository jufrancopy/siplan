<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Gerencia;
use App\SubGerencia;

class OrganigramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerencias = SubGerencia::groupBy('gerencias_id')
            ->selectRaw('count(*) as total, gerencias_id')
            ->get();
        
        


        $consejos = SubGerencia::where('gerencias_id','=',1)->get();
        $presidencias = SubGerencia::where('gerencias_id','=',2)->get();
        $gdts = SubGerencia::where('gerencias_id','=',3)->get();
        $gafs = SubGerencia::where('gerencias_id','=',4)->get();
        $gss = SubGerencia::where('gerencias_id','=',5)->get();
        $gals = SubGerencia::where('gerencias_id','=',6)->get();
        $gpes = SubGerencia::where('gerencias_id','=',7)->get();

        
        return view('general.organigramas.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
