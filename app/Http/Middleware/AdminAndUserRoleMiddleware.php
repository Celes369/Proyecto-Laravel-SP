<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAndUserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {/*
        // Verifica si el usuario está autenticado y tiene roles
        if(auth()->check() && auth()->user()->roles[0]->id !=2){
        // Permite el acceso y continúa con la siguiente solicitud
         return $next($request);
        }
        return redirect('/');*/
    }
}



