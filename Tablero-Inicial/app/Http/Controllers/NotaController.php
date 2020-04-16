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

    	return view('notas.ver',['notas' => $notas, 'idTab' => $id ]) ;
    }

    public function visualizar(Request $req){
        $id = $req->input('id');
        
        $nota = Nota::find($id);
        
    	return view('notas.visualizar',['nota' => $nota]) ;
    }

    public function add(Request $req){
        
        if(!$req->has('idNot')){
            if(!$req->has('texto')){
                
                $id = $req->input('idTab');
                return view('notas.add',['idTab' => $id]);
            }else{
                $req->validate([
                    'texto'  => 'string|max:300|required',
                    'fecha' => 'date|required',
                    'completado' => 'integer|required'
                 ]) ;

                $text = $req->input('texto');
                Nota::create([
                    'texto' => "{$text}",
                    'fecha' => $req->input('fecha'),
                    'completado' => $req->input('completado'),
                    'idTab' => $req->input('id')]
                );
                $id = $req->input('id');
                return redirect()->route('nota.ver',['id' => $id]);
            }
        }else{

            $req->validate([
                'texto'  => 'string|max:300|required',
                'fecha' => 'date|required',
                'completado' => 'integer|required'
             ]) ;
             
            $id   = $req->input('idNot');
            $nota = Nota::find($id);
            $text = $req->input('texto');
            $nota->texto      = "{$text}";
            $nota->fecha      = $req->input('fecha');
            $nota->completado = $req->input('completado');
            $nota->save() ;
            $id = $req->input('id');
            return redirect()->route('nota.ver',['id' => $id]);
        }
        
    }

    public function edit(Request $req){

        $id     = $req->input('id');
        $nota   = Nota::find($id);
        return view('notas.add',['nota' => $nota ,'idTab' => $nota->idTab]);
    }
}
