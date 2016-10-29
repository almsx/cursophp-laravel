<?php

namespace Uber\Http\Requests;

use Uber\Http\Requests\Request;

class StoreConductorPostRequest extends Request
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
            'usuarioC' => 'required|unique:Conductores',
            'passwordC' => 'required',
            'nombre' => 'required',
            'aPaterno' => 'required',
            'aMaterno' => 'required',
            'telefono' => 'required|unique:Conductores'
        ];
    }
}
