<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gasto;
use App\Taxi;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $gastos = Gasto::selectRaw('sum(montoPesos) as sumaGastos, id, fecha, mes, anio, descripcion, montoPesos, taxi_id')
                ->orderBy('anio', 'desc')
                ->groupBy('anio','mes', 'taxi_id')
                ->paginate();        
        $taxis = Taxi::orderBy('matricula','ASC')->get();
        $listaTaxis = array_merge(array('' => 'Todos') ,$taxis->lists('matricula', 'id')->toArray());
        return view('gastos.index', compact('gastos','taxis','listaTaxis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $gastos = Gasto::paginate();
        $taxis = Taxi::orderBy('matricula','ASC')->get();
        
        return view('gastos.create', compact('gastos','taxis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $cant_gastos = 0;
        while (null !== $request->get('descripcion'.$cant_gastos)) {

            $gasto = new Gasto();

            $gasto->descripcion = $request->get('descripcion'.$cant_gastos);
            $gasto->montoPesos = $request->get('monto'.$cant_gastos);
            $gasto->mes = $request->get('mes');
            $gasto->anio = $request->get('anio');
            $gasto->taxi_id = $request->get('taxi_id');
            
            $gasto->save();

            $cant_gastos++;
        }


        return \Redirect::route('gastos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $gasto = Gasto::findOrFail($id);
        $gastos = Gasto::where('taxi_id', $gasto->taxi_id)
            ->where('anio', $gasto->anio)
            ->where('mes', $gasto->mes)->get();

        $totalGastos = Gasto::selectRaw('sum(montoPesos) as sumaGastos, id, fecha, mes, anio,  montoPesos, taxi_id')
            ->where('taxi_id', $gasto->taxi_id)
            ->where('anio', $gasto->anio)
            ->where('mes', $gasto->mes)
            ->orderBy('anio', 'desc')
            ->groupBy('anio','mes', 'taxi_id')->get();


        return view('gastos.show', compact('gastos','totalGastos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $gasto = Gasto::findOrFail($id);
        $gastos = Gasto::where('taxi_id', $gasto->taxi_id)
            ->where('anio', $gasto->anio)
            ->where('mes', $gasto->mes)->get();

        return view('gastos.edit', compact('gastos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $gasto = Gasto::findOrFail($id);
        $gasto->fill($request->all());
        $gasto->save();

        return \Redirect::route('gastos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
