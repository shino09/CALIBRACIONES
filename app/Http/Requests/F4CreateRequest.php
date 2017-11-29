<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class F4CreateRequest extends Request
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
            'tipoEquipo_id' => 'required',
            'marca_id' => 'required',
            'modelo_id' => 'required|unique_with:f4s,marca_id',
            'foto' => 'required|mimes:jpeg,jpg,png|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'modelo_id.unique_with' => 'La combinación de tipo equipo,modelo y marca ya fue registrada',
            'tipoEquipo_id.required' => 'Debe ingresar algún tipo de equipo',
            'marca_id.required' => 'Debe ingresar alguna marca',
            'modelo_id.required' => 'Debe ingresar algún modelo',
        ];
    }
}
