<?php

namespace EstudiantesDeLP\Http\Requests;

use EstudiantesDeLP\Http\Requests\Request;
use Auth;

class EditarHistoriaRequest extends Request
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
            'contenido' => 'required|min:2|max:5000',
            'mantenerImagen' => '',
            'imagenDePortada' => 'required_unless:mantenerImagen,1|image|max:1024|dimension_min:200,100',
        ];
    }

    /**
     * Personalizado
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'imagenDePortada.required_unless' => 'Seleccione una imagen o tilde "Mantener imagen de portada"',
        ];
    }
}
