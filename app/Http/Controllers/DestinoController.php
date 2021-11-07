<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;


class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = Destino::all(); 
        return $destinos;
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
        $destino = new Destino();
        $destino->nombre = $request->nombre;
        $destino->apellido = $request->apellido;
        $destino->direccion = $request->direccion;
        $destino->save();
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
        $destino = Destino::findOrFail($request->id);        
        $destino->nombre = $request->nombre;
        $destino->apellido = $request->apellido;
        $destino->direccion = $request->direccion;
        $destino->save();

        return $destino;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $destino = Destino::destroy($request->id);
        return $destino;
    }
}
