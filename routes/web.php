<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',    'TableroController@index')->name('tablero.ver');
Route::get('/ver', 'NotaController@view')->name('nota.ver') ;
Route::get('/visualizar', 'NotaController@visualizar')->name('nota.visualizar') ;
Route::match(['get','post'], '/editar', 'TableroController@edit')->name('tablero.editar') ;

Route::get('/borrar', 'TableroController@delete')->name('tablero.borrar') ;
