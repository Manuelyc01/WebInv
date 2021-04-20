<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TradicionalRequest extends FormRequest
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
            'tituloListado' => 'required',
            'desListado' => 'required',
            'tituloB1' => 'required',
            'desB1' => 'required',
            'tituloB2' => 'required',
            'desB2' => 'required',
            'imagenFondoListado' => 'required',
            'imagenCaladaListado' => 'required',
            'imagenIzqB1' => 'required',
            'imagenDerB1' => 'required'
        ];
    }
}