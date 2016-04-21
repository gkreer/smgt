<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Liquidacion;
use App\Taxi;
use App\Chofer;

class PdfController extends Controller
{

    public function listadoChofer()
    {
        $chofer = Chofer::where('id', '15')->first();
        $taxi = Taxi::where('id','7')->first();
        $fecha_desde = '2015-11-01';
        $fecha_hasta = '2015-11-30';

        $liquidaciones = Liquidacion::matricula($taxi->id)
        ->choferid($chofer->id)
        ->fechaDesde($fecha_desde)
        ->fechaHasta($fecha_hasta)
        ->orderBy('fecha', 'DESC')->get();

        $view =  view('liquidaciones.pdf_index', 
            compact('liquidaciones', 'chofer', 'taxi'))->render();

        $pdf = \PDF::loadView('liquidaciones.pdf_index',compact('liquidaciones', 'chofer', 'taxi'));
        return $pdf->stream();
    }
}
