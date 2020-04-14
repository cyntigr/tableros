<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

/** 
 * Operación de la API de ejemplo:
 * Devuelva un listado de los tableros que tengo en la base de datos.
 */
Route::get('tableros',     'api\TableroController@list') ;
Route::get('tablero/{id}', 'api\TableroController@info') ;




/** NOS OLVIDAMOS DE MOMENTO */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
