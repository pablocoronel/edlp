<?php

namespace EstudiantesDeLP\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

// Definiciones para las politicas
// Modelo de historia
use EstudiantesDeLP\Historia;
// Policy correspondiente
use EstudiantesDeLP\Policies\HistoriaPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'EstudiantesDeLP\Model' => 'EstudiantesDeLP\Policies\ModelPolicy',
        Historia::class => HistoriaPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
        //
    }
}
