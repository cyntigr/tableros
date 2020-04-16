<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $usuario)
    {
        if ($request->user()->perfil == $usuario ) {
            return $next($request);
        }elseif ($request->user()->esAdministrador()) {
            return redirect()->route('admin') ;
        }else{      
            return redirect()->route('tablero.ver') ;
        }
    }
}
