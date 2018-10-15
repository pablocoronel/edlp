<?php

namespace EstudiantesDeLP\Http\Requests;

use EstudiantesDeLP\Http\Requests\Request;
use Auth;

class CrearHistoriaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|string|min:2|max:60',
            'imagenDePortada' => 'required|image|max:1024|dimension_min:200,100',
            'contenido' => 'required|min:2|max:5000',
        ];
    }
}
