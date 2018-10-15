<?php

namespace EstudiantesDeLP\Http\Requests;

use EstudiantesDeLP\Http\Requests\Request;

class UsuarioInvitacionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $formatoUsuario= '/^[a-zA-Z0-9-_]{5,20}$/';
        $formatoClave= '/^[a-zA-Z0-9\.-_]{8,20}$/';

        return [
            'usuarioRegistroInvitacion' => 'required|unique:usuarios,usuario|min:5|max:20|regex:'.$formatoUsuario,
            'claveRegistroInvitacion' => 'required|min:8|max:20|regex:'.$formatoClave,
            'emailRegistroInvitacion' => 'required|email|unique:usuarios,email',
        ];
    }
}
