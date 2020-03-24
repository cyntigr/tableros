<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\Tablero ;
use Illuminate\Http\Request;

class TableroController extends Controller
{
    /**
     * Muestra un listado con todos los tableros de la base 
     * de datos.
     * 
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
    	// obtenemos un listado de los tableros almacenados 
    	// en la base de datos.
    	$tab = Tablero::all() ; 
    	
    	return view('tableros.index', ['tableros' => $tab]) ;
    }

    /**
     * Editamos los datos del tablero que se nos indica
     * 
     * @param  Request $req 
     * @return
     */
    public function edit(Request $req)
    {
    	// OJO:
    	// VAMOS A TENER EN CUENTA QUE SIEMPRE ME PASAN LOS DATOS QUE NECESITO!!!!
    	$idt = $req->input('id') ;
    	$tab = Tablero::find($idt) ;

    	// si no tengo el parámetro NOM muestro la vista
    	if (!$req->has('nom'))
    		return view('tableros.editar', ['tablero' => $tab]) ;
    	
    	// en otro caso, modificamos el campo NOMBRE y guardar
    	$tab->nombre = $req->input('nom') ;
    	$tab->save() ;
    	
    	// redirigimos a la pantalla principal de tableros
    	return redirect()->route('tablero.ver') ;
    }

}
