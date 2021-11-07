<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Origen;

class OrigenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $origen = Origen::all();
        return $origen;
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
        $origen = new Origen();
        $origen->nombre = $request->nombre;
        $origen->apellido = $request->apellido;
        $origen->cedula = $request->cedula;
        $origen->email = $request->email;
        $origen->celular = $request->celular;
        $origen->fechaEnvio = $request->fechaEnvio;
        $origen->direccion = $request->direccion;
        $origen->save(); 
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
    public function update(Request $request)
    {
        $origen = Origen::findOrFail($request->id);
        $origen->nombre = $request->nombre;
        $origen->apellido = $request->apellido;
        $origen->cedula = $request->cedula;
        $origen->email = $request->email;
        $origen->celular = $request->celular;
        $origen->fechaEnvio = $request->fechaEnvio;
        $origen->direccion = $request->direccion;
        $origen->save();
        return $origen;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $origen = Origen::destroy($request->id);
        return $origen;
    }
}
