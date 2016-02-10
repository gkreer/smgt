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
        $gastos = Gasto::paginate();
        $taxis = Taxi::orderBy('matricula','ASC')->get();
        return view('gastos.index', compact('gastos','taxis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('gastos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $gasto = new Gasto($request->all());
        $gasto->save();

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
        //
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

        //dd($gasto);
        return view('gastos.edit', compact('gasto'));
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
