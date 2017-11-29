<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request
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
            'password' => 'required',
            'rut_usuario' => 'required|cl_rut',
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'La contraseña es incorrecta',
            'rut_usuario.required' => 'Debe ingresar el rut ',
            'rut_usuario.cl_rut' => 'El rut ingresado es inválido ',
        ];
    }
}
