<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(Auth::user()):
            if(Auth::user()->perfil == 2 )
                return redirect()->route('tablero.ver');
            else 
                return view('welcome');
        endif;
        return view('auth/login');
    }

    public function indexWelcome()
    {
        return view('welcome');
    }
}