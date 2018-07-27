<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class DepartamentoStoreRequest extends FormRequest
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
            'nro_dpto'=>'required',
            'nombre'=>'required',
            'capital'=>'required',
            'poblacion'=>'required',
            'superficie'=>'required',
            'densidad'=>'required',
        ];
    }
}
