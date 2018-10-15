<?php

namespace EstudiantesDeLP\Http\Middleware;

use Closure;

class CrearHistoriaMiddleware
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
        // Permite crear historias solo a usuarios logueados
        if (\Auth::guest()) {
            return redirect('invitacion');
        }

        return $next($request);
    }
}
