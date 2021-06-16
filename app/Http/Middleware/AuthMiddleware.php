<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect(route('auth.loginform'))
            ->withErrorMessage('Tienes que estar autenticado para entrar a esta pagina!');
        }
        return $next($request);
    }
}
