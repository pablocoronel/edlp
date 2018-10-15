<?php

namespace EstudiantesDeLP\Http\Requests;

use EstudiantesDeLP\Http\Requests\Request;

use EstudiantesDeLP\Historia;


class AgregarComentarioRequest extends Request
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
        // $primeraHistoria= Historia::first()->id;
        // $ultimaHistoria= Historia::all()->last()->id;
        $estadoLogin= '';
        if (!\Auth::check()) {
            $estadoLogin= 'required|';
        }

        return [
            // 'id_historia' => 'required|integer|min:'.$primeraHistoria.'max:'.$ultimaHistoria,
            'id_historia' => 'required|integer|exists:historias,id',
            'apodo_anonimo' => $estadoLogin.'string|min:2|max:25',
            'comentario' => 'required|string|min:2|max:500'
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
            'apodo_anonimo.required' => 'Escriba un apodo o ingrese con su usuario',
        ];
    }
}
