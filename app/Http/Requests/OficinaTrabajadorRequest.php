<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OficinaTrabajadorRequest extends FormRequest
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
            'id_oficina' => 'required',
            'id_oficina' => 'required',
            'id_cargo_laboral' => 'required',
            'id_colaborador' => 'required',
            'est_trabajador' => 'required' 
        ];
    }
}