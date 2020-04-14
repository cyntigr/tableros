<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index()
    {
    	$users = User::all() ;
    	return view('usuarios.index', ['usuarios' => $users]) ;
    }

    public function view(Request $req, User $user)
    {
    	return view('usuarios.ver', ['usuario' => $user]) ;
    }
}
