<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/tablero/ver' ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Si queremos realizar una comprobación tras el login del usuario,
     * debemos sobrecargar este método y añadirle la lógica necesaria.
     * En este caso, queremos redirigir al usuario según su perfil.
     * 
     * @param  Request $request 
     * @param  $user    
     * @return           
     */
    public function authenticated(Request $request, $user)
    {
        // Tell don't ask
        if ($user->esAdministrador()) 
            return redirect()->route('admin') ;
        //
        return redirect()->route('tablero.ver') ;
    }

    /**
     * @return
     */
    public function logout()
    {
        Auth::logout() ;
        return redirect()->route('home') ;
    }
}
