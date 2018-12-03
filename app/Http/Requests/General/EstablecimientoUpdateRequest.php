<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class EstablecimientoUpdateRequest extends FormRequest
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
            'tipo'=>'required',
            'dpto_id'=>'required',
            'ciudad_id'=>'required',
            'nivel_id'=>'required',
            'cantidad'=>'required',
            'camas'=>'required',
            'referencia'=>'required',
            'anho_id'=>'required'
        ];
    }
}
