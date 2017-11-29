<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClienteUpdateRequest extends Request
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
        return [
            'nombre' => 'required',
            'ubicacion' => 'required',
            'planta' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del cliente es obligatorio',
            'ubicacion.required' => 'La ciudad del cliente es obligatorio',
            'planta.required' => 'La dirección del cliente es obligatorio'
        ];
    }
}
