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

// HOME
Route::get('/', 					    'Auth\LoginController@showLoginForm')->name('home') ;
Route::get('logout',                    'Auth\LoginController@logout')->name('logout') ;

// TEMPORAL
Route::get('/admin',                    'AdminController@index' )->name('admin') ;

// TABLERO
Route::prefix('tablero')->group(function()
{
	Route::get('ver',                      'TableroController@index')->name('tablero.ver') ;
	Route::get('borrar', 				   'TableroController@delete')->name('tablero.borrar') ;
	Route::match(['get','post'], 'editar', 'TableroController@edit')->name('tablero.editar') ;
	Route::match(['get','post'], 'aniadir','TableroController@add')->name('tablero.aniadir') ;
});

// NOTAS
Route::prefix('nota')->group(function()
{
	Route::get('ver',    'TableroController@view')->name('nota.ver') ;
	Route::get('borrar', 'NotaController@delete')->name('nota.borrar') ;
	Route::get('estado', 'NotaController@state')->name('nota.estado') ;

	Route::match(['get','post'],'editar', 'NotaController@edit')->name('nota.editar') ;
}) ;


Route::fallback(function() 
{
	return view('404') ;
});

Route::get('usuarios', 'UsuarioController@index') ;
Route::get('usuario/{user}', 'UsuarioController@view')->name('usuario.ver') ;



/** 
 * Añadido automáticamente al configurar el sistema de autenticación de Laravel.
 * IMPORTANTE: la primera línea no se debe tocar y/o modificar. 
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('main');
