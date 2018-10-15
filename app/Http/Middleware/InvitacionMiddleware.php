<?php

namespace EstudiantesDeLP\Http\Middleware;

use Closure;

class InvitacionMiddleware
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
        // Solo se puede ingresar a la vista Invitacion cuando No se esta logueado
        if (!\Auth::guest()) {
            return redirect('/');
        }

        return $next($request);
    }
}
