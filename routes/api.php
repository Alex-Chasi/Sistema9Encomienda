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
Route::get('/ori','App\Http\Controllers\OrigenController@index'); //mostrar todos los registros
Route::post('/origenes/crear','App\Http\Controllers\OrigenController@store'); //crear un registro
Route::put('/origenes/{id}','App\Http\Controllers\OrigenController@update'); //actualizar un registro
Route::delete('/origenes/{id}','App\Http\Controllers\OrigenController@destroy'); //eliminar un registro

//destino
Route::get('/des','App\Http\Controllers\DestinoController@index'); //mostrar todos los registros
Route::post('/d','App\Http\Controllers\DestinoController@store'); //crear un registro
Route::put('/act/{id}','App\Http\Controllers\DestinoController@update'); //actualizar un registro
Route::delete('/origenes/{id}','App\Http\Controllers\DestinoController@destroy'); //eliminar un registro


