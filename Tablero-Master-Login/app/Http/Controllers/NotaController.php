<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NotaController extends Controller
{
	/**
	 * 
	 * @param Request $req 
	 */
	public function add(Request $req)
	{

	}

	/**
	 * Edita una nota
	 * 
	 * @param  Request $req 
	 * @return 
	 */
    public function edit(Request $req)
    {
    	// antes de mostrar el formulario, debemos discernir si se nos 
    	// está pidiendo mostrar la nota para permitir la edición, o 
    	// se nos está indicando que debemos actualizar la info.
    	if ($req->isMethod('get')):
    		$not = $this->check($req) ;
    		return view('notas.editar', ['nota' => $not]) ;
    	endif ;

    	// Si el método es POST: ya me están pasando la nota porque
    	// vengo del formulario. Como la nota contiene el idTAB, el
    	// formulario no me proporciona este dato y, por lo tanto, 
    	// no puedo llamar a check.
    	$req->validate([
    					 'idn' => 'integer|min:1|required',
    					 'tex' => 'string|required'
    					]) ;

    	// 
    	$not = Nota::find($req->input('idn')) ;
    	$not->texto = $req->input('tex') ;
    	$not->save() ;

    	return redirect()->route('nota.ver', ['id' => $not->idTab]) ;
    }

    /**
	 * Borra la nota seleccionada
	 * 
	 * @param  Request $req 
	 * @return 
	 */
    public function delete(Request $req)
    {
   		// realizamos comprobaciones necesarias
   		$not = $this->check($req) ;
    	    	
    	// borramos la nota
    	$not->delete() ;

    	// redirigir al tablero
    	return redirect()->route('nota.ver', ['id' => $req->input('idt')]) ;

    }

    /**
	 * Cambiamos el estado de la nota de pendiente a completado,
	 * o viceversa.
	 * 
	 * @param  Request $req 
	 * @return
	 */
    public function state(Request $req)
    {
    	// hacemos las comprobaciones
    	$not = $this->check($req) ;

    	// cambiamos el estado y guardamos
    	$not->cambiarEstado()->save() ;

    	// redirigir al tablero
    	return redirect()->route('nota.ver', ['id' => $req->input('idt')]) ;
    }

    /**
     * Realiza el chequeo necesario para los métodos anteriores, 
     * comprobando si recibimos (por GET) los parámetros idNot e
     * idTab. El primero lo necesitamos para conocer la nota sobre
     * la que queremos trabajar; el segundo, para regresar al lis-
     * tado de notas para el tablero elegido.
     * 
     * @param  Request $req 
     * @return 
     */
    private function check(Request $req)
    {
    	if (!$req->filled('idt'))
    		return redirect()->route('tablero.ver') ;
    	//
    	if (!$req->filled('idn'))
    		return redirect()->route('nota.ver', ['id' => $req->input('idt')]) ;
    	//
    	$not = Nota::find($req->input('idn')) ;

    	// si la nota no existe, redirigimos (aunque lo normal 
    	// sería mostrar un error)
    	if (!$not)
    		return redirect()->route('nota.ver', ['id' => $req->input('idt')]) ;

    	//
    	return $not ;
    }


}

