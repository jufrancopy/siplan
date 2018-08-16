<?php

namespace App\Http\Controllers\General;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proyecto; 
use Barryvdh\DomPDF\Facade as PDF;


class PdfController extends Controller
{

    public function ejemplo() {
        
        $pdf = PDF::loadView('pdf.invoice');
        return $pdf->download('archivo.pdf');
        }
    }
