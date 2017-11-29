<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UnidadCreateRequest extends Request
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
            'nombre' => 'required|unique_with:unidades,tipoEquipo_id',
            'tipoEquipo_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Debe ingresar alguna unidad de medida',
            'nombre.unique_with' => 'La combinación de unidad de medida y tipo equipo ya fue registrada',
            'tipoEquipo_id.required' => 'Debe ingresar algún tipo de equipo',
        ];
    }
}
