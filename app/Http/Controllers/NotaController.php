<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Tablero;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Lista las notas de un tablero,
     * recibe un id y apartir de aí nos devuelve las notas 
     * concretas
     */
    public function view(Request $req){
        $id = $req->input('id');
        
        $notas = Tablero::find($id)->notas()->get();

    	return view('notas.ver',['notas' => $notas]) ;
    }

    public function visualizar(Request $req){
        $id = $req->input('id');
        
        $nota = Nota::find($id);
        
    	return view('notas.visualizar',['nota' => $nota]) ;
    }
}
