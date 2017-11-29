<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ModeloUpdateRequest extends Request
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
            'nombre' => 'required|unique_with:modelos,marca_id',
            'marca_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Debe ingresar algún modelo',
            'nombre.unique_with' => 'La combinación de modelo y tipo equipo ya fue registrada',
            'marca_id.required' => 'Debe ingresar algún tipo de equipo',
        ];
    }
}
