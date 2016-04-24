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

    public function listadoChofer(Request $request)
    {
        $taxi_id = $request->taxi_id;
        $chofer_id = $request->chofer_id;
        $fecha_desde = $request->fecha_desde;
        $fecha_hasta = $request->fecha_hasta;
        
        $chofer = Chofer::where('id', $chofer_id)->first();
        $taxi = Taxi::where('id',$taxi_id)->first();

        $liquidaciones = Liquidacion::matricula($taxi->id)
        ->choferid($chofer->id)
        ->fechaDesde($fecha_desde)
        ->fechaHasta($fecha_hasta)
        ->orderBy('fecha', 'ASC')->get();

        $view =  view('liquidaciones.pdf_index', 
            compact('liquidaciones', 'chofer', 'taxi', 'fecha_desde', 'fecha_hasta'))->render();

        $pdf = \PDF::loadView('liquidaciones.pdf_index',
            compact('liquidaciones', 'chofer', 'taxi', 'fecha_desde', 'fecha_hasta' ));
        return $pdf->stream();
    }
}
