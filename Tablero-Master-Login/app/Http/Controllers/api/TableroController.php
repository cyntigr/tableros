<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 *
 * API
 */

namespace App\Http\Controllers\api;

use App\Models\Tablero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableroController extends Controller
{
    /**
     * Obtiene un listado de todos los tableros almacenados
     * en la base de datos.
     * 
     * @return 
     */
    public function list()
    {    	
    	return response()
    			->json(Tablero::all()) ;
    }

    /**
     * Obtiene información sobre un determinado tablero.
     * @param  int $id 
     * @return
     */
    public function info(int $id)
    {
    	return response()
    			->json(Tablero::find($id)) ;
    }
}
