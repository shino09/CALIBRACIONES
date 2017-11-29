<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CotizadoUpdateRequest extends Request
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
            'compra' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'compra.required' => 'Debe indicar alguna de las opciones',

        ];
    }
}
