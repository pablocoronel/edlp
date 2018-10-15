<?php

namespace EstudiantesDeLP\Http\Controllers;

use Illuminate\Http\Request;

use EstudiantesDeLP\Http\Requests;
use EstudiantesDeLP\Http\Controllers\Controller;

use EstudiantesDeLP\Usuario;
use EstudiantesDeLP\Http\Requests\UsuarioRequest;
use EstudiantesDeLP\Http\Requests\UsuarioInvitacionRequest;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function procesar(UsuarioRequest $request)
    {
        Usuario::create([
            'usuario' => $request['usuarioRegistro'],
            'password' => bcrypt($request['claveRegistro']),
            'email' => $request['emailRegistro']
        ]);

        return redirect('/');
    }

    public function procesarInvitacion(UsuarioInvitacionRequest $request)
    {
        Usuario::create([
            'usuario' => $request['usuarioRegistroInvitacion'],
            'password' => bcrypt($request['claveRegistroInvitacion']),
            'email' => $request['emailRegistroInvitacion']
        ]);

        return redirect('/');
    }

}
