<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClienteCreateRequest extends Request
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
            'nombre' => 'required|unique:clientes',
            'rut_cliente' => 'required|cl_rut|unique:clientes',
            'ubicacion' => 'required',
            'planta' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'rut_cliente.required' => 'Debe ingresar algún rut',
            'rut_cliente.cl_rut' => 'El rut ingresado no es válido',
            'rut_cliente.unique' => 'El rut del cliente ya fue registrado en el sistema',
            'nombre.required' => 'El nombre del cliente es obligatorio',
            'ubicacion.required' => 'La ciudad del cliente es obligatorio',
            'planta.required' => 'La dirección del cliente es obligatoria',
        ];
    }
}
