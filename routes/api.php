<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//origen
Route::get('/ori','App\Http\Controllers\InicioController@index'); //mostrar todos los registros
Route::post('/origenes/crear','App\Http\Controllers\InicioController@store'); //crear un registro
Route::put('/origenes/{id}','App\Http\Controllers\InicioController@update'); //actualizar un registro
Route::delete('/elimi/{id}','App\Http\Controllers\InicioController@destroy'); //eliminar un registro

//destino
Route::get('/des','App\Http\Controllers\DestinoController@index'); //mostrar todos los registros
Route::post('/d','App\Http\Controllers\DestinoController@store'); //crear un registro
Route::put('/act/{id}','App\Http\Controllers\DestinoController@update'); //actualizar un registro
Route::delete('/origenes/{id}','App\Http\Controllers\DestinoController@destroy'); //eliminar un registro


//DetalleEnvio
Route::get('/listardetalle','App\Http\Controllers\DetalleController@index'); //mostrar todos los registros
Route::post('/creardetalle','App\Http\Controllers\DetalleController@store'); //crear un registro
Route::put('/deta/{id}','App\Http\Controllers\DetalleController@update'); //actualizar un registro
Route::delete('/eliminardet/{id}','App\Http\Controllers\DetalleController@destroy'); //eliminar un registro


