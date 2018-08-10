<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use App\Departamento;

class DisplayDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Datatables::of(Departamento::query())->make(true);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('general.displaydata');
    }

    public function buttons()
    {
        return view('general.buttons');
    }
}
