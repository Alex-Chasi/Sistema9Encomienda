<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;


class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesEnvio = Detalle::all();
        return $detallesEnvio;
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
        $detalleEnvio = new Detalle();
        $detalleEnvio->descripcion = $request->descripcion;
        $detalleEnvio->largo = $request->largo;
        $detalleEnvio->ancho = $request->ancho;
        $detalleEnvio->alto = $request->alto;
        $detalleEnvio->peso = $request->peso;
        $detalleEnvio->save();
    
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
        $detalleEnvio = Detalle::findOrFail($request->id);
        $detalleEnvio->descripcion = $request->descripcion;
        $detalleEnvio->largo = $request->largo;
        $detalleEnvio->ancho = $request->ancho;
        $detalleEnvio->alto = $request->alto;
        $detalleEnvio->peso = $request->peso;
        $detalleEnvio->save();
        return $detalleEnvio;   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $detalleEnvio = Detalle::destroy($request->id);
        return $detalleEnvio; 
    }
}
