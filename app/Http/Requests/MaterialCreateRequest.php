<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MaterialCreateRequest extends Request
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
            'nombre' => 'required|unique_with:materiales,tipoEquipo_id',
            'tipoEquipo_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Debe ingresar algún material',
            'nombre.unique_with' => 'La combinación de material y tipo equipo ya fue registrada',
            'tipoEquipo_id.required' => 'Debe ingresar algún tipo de equipo',

        ];
    }
}
