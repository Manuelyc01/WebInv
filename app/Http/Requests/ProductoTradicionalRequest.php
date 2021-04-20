<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoTradicionalRequest extends FormRequest
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
            'nombre' => 'required',
            'des' => 'required',
            'zonaVenta' => 'required',
            'tituloRelacionados' => 'required',
            'imagenListado' => 'required',
            'etiqueta_tradi_id' => 'required'
        ];
    }
}