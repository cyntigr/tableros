<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// TABLERO
Route::get('/', 'TableroController@index')->name('tablero.ver');
Route::match(['get','post'], '/editar', 'TableroController@edit')->name('tablero.editar') ;
Route::match(['get','post'], '/aniadir', 'TableroController@add')->name('tablero.aniadir') ;
Route::get('/borrar', 'TableroController@delete')->name('tablero.borrar') ;

// NOTAS
Route::get('/ver', 'NotaController@view')->name('nota.ver') ;
Route::get('/visualizar', 'NotaController@visualizar')->name('nota.visualizar') ;
Route::get('/edit', 'NotaController@edit')->name('nota.edit') ;
Route::match(['get','post'], '/anadir', 'NotaController@add')->name('nota.anadir') ;








