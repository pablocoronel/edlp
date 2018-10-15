<?php

namespace EstudiantesDeLP\Providers;

use Validator;
use Input;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Nueva regla de validacion: resolucion para imagenes de portada en crearHistoria 
        Validator::extend('dimension_min', function($attribute, $value, $parameters)
        {
            if(function_exists('getimagesize'))
            {
                $file = Input::file($attribute);
                // $image_info = getimagesize($file['tmp_name']);
                $image_info = getimagesize($file->getRealPath());
                $image_width = $image_info[0];
                $image_height = $image_info[1];
                if( (isset($parameters[0]) && $parameters[0] != 0) && $image_width < $parameters[0]) return false;
                if( (isset($parameters[1]) && $parameters[1] != 0) && $image_height < $parameters[1] ) return false;
                return true;
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
