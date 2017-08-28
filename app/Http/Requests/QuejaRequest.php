<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class QuejaRequest extends FormRequest
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
            'problem' => 'required|string',
            'entity_id'=> 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'problem.required' => 'El campo problema es requerido',
            'problem.string' => 'El campo problema tiene que ser texto',
            'entity_id.required' => 'El correo tiene que ser valido',
            
        ];
    }
}
