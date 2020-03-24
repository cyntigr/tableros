<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    // definimos el nombre de la tabla
    protected $table = 'Tablero' ;

    // establecemos el campo de clave primaria
    protected $primaryKey = 'idTab' ;

    // utilizamos los campos updated_at y created_at
    // el valor por defecto de $timestamps es true
    public $timestamps = false ;

    /**
     * Relación 1:N (uno a muchos) con la tabla NOTA
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function notas()
    {
    	return $this->hasMany('App\Models\Nota', 'idTab') ;
    }
}
