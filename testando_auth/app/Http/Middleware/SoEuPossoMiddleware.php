<?php

namespace App\Http\Middleware;

use Closure;

class SoEuPossoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->nome === 'fernanda')
        {
            return $next($request);
        }
        //return redirect('/login');    -- redireciona para a url /login
        return redirect()->route('login');  // redireciona para a rota cujo nome eh login
    }
}
