<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GestionNivel3bRequest extends FormRequest
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
            'titulo' => 'required',
            'gestion_nivel3_id' => 'required'
        ];
    }
}