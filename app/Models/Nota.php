<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nota extends Model
{
    // definimos el nombre de la tabla
    protected $table = 'Nota' ;

    // establecemos el campo de clave primaria
    protected $primaryKey = 'idNot' ;

    // indicamos que no vamos a utilizar los campos created_at y updated_at
    public $timestamps = false ;


    /**
     * Relación N:1 (muchos a uno) con la tabla TABLERO
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function tablero()
    {
    	return $this->belongsTo('App\Models\Tablero', 'idTab') ;
    }


    
   
}
