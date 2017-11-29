<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsuarioUpdateRequest extends Request
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
            'name' => 'required',
            'email' => 'required|email|exists:users',
            'password' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'tipo_usuario' => 'required',
        ];
    }

        public function messages()
    {
        return [
            'name.required' => 'Los nombres son obligatorios',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio',
            'apellido_materno.required' => 'El apellido materno es obligatorio',
            'email.required' =>'Debe ingresar algún email',
            'email.unique:users,email' => 'Este email ya fue registrado en el sistema',
            'password.required' => 'Debe ingresar alguna contraseña',
            'tipo_usuario.required' => 'Debe ingresar algún rol',
        ];
    }

}
