<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'apellido_paterno' => 'required|string',
            'apellido_materno' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Debes escribir un nombre',
            'apellido_paterno.required' => 'Debes escribir el apellido paterno',
            'apellido_materno.required' => 'Debes escribir el apellido materno'
        ];
    }
}
