<?php

namespace EstudiantesDeLP\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \EstudiantesDeLP\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \EstudiantesDeLP\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \EstudiantesDeLP\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \EstudiantesDeLP\Http\Middleware\RedirectIfAuthenticated::class,
        'crearHistoria' => \EstudiantesDeLP\Http\Middleware\CrearHistoriaMiddleware::class,
        'invitacion' => \EstudiantesDeLP\Http\Middleware\InvitacionMiddleware::class,
    ];
}
