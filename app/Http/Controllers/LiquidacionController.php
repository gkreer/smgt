<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Liquidacion;
use App\Taxi;
use App\Chofer;

class LiquidacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $choferes = Chofer::where('activo', '1')->orderBy('apellido','ASC')->get();
        $taxis = Taxi::orderBy('matricula','ASC')->get();
        $liquidaciones = Liquidacion::matricula($request->get('taxi_id'))
                        ->choferid($request->get('chofer_id'))
                        ->fechaDesde($request->get('fecha_desde'))
                        ->fechaHasta($request->get('fecha_hasta'))
                        ->orderBy('fecha', 'DESC')->paginate();
        
        $listaTaxis =  array('' => 'Taxi...') + $taxis->lists('matricula', 'id')->toArray();
        $listaChoferes = array('' => 'Chofer...') + $choferes->lists('nombre_completo', 'id')->toArray();

        return view('liquidaciones.index', compact('liquidaciones', 'choferes', 'taxis', 'listaTaxis', 'listaChoferes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taxis = Taxi::lists('matricula', 'id');
        $choferes = Chofer::where('activo', '1')->orderBy('apellido','ASC')->get();
        $listaChoferes = array_merge(array('' => 'Elegir chofer...') , $choferes->lists('nombre_completo', 'id')->toArray());

        
        return view('liquidaciones.create')->with(['taxis'=> $taxis, 'choferes' => $choferes, 
            'listaChoferes' => $listaChoferes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $liquidacion = new Liquidacion($request->all());
        $liquidacion->save();

        return \Redirect::route('liquidaciones.index');
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
        $liquidacion = Liquidacion::findOrFail($id);

        $taxis = Taxi::lists('matricula', 'id');
        $choferes = Chofer::lists('apellido', 'id');
        
        return view('liquidaciones.edit', compact('liquidacion'))->with(['taxis'=> $taxis, 'choferes' => $choferes]);
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
        $liquidacion = Liquidacion::findOrFail($id);
        $liquidacion->fill($request->all());
        $liquidacion->save();

        return \Redirect::route('liquidaciones.index');
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
