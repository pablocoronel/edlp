<?php

namespace EstudiantesDeLP\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

// Modelos
use EstudiantesDeLP\Usuario;
use EstudiantesDeLP\Historia;


class HistoriaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Function before es para permitir la autorizacion
    // a los usuarios con rol de administrador
    public function before(Usuario $usuario){
        if ($usuario->rol == 'administrador') {
            return true;
        }
    }

    public function edit(Usuario $usuario, Historia $historia)
    {
        return $usuario->id === $historia->id_usuario_creador;
    }

    public function update(Usuario $usuario, Historia $historia){
        return $usuario->id === $historia->id_usuario_creador;
    }

    public function destroy($usuario, Historia $historia){
        return $usuario->id === $historia->id_usuario_creador;
    }
}
