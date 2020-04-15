<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    private const ADMINISTRADOR = 1 ;

    protected $table = 'usuario' ;
    protected $primaryKey = 'idUsu' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','apellidos', 'email', 'password','perfil',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     */
    /*public function getRouteKeyName()
    {
        return 'email' ;    // se llama SLUG
    }*/

    /**
     * @return
     */
    public function esAdministrador()
    {
        return $this->perfil == Usuario::ADMINISTRADOR ;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->nombre} {$this->apellidos}" ;
    }
}
