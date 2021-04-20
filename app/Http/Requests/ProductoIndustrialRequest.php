<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoIndustrialRequest extends FormRequest
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
            'tituloRelacionados' => 'required',
            'imagenListado' => 'required',
            'imagenFondo' => 'required',
            'imagenFondoMobile' => 'required',
            'imagenBeneficios' => 'required',
            'imagenBeneficios2' => 'required',
            'subcat_indus_id' => 'required',
            'etiqueta_indus_id' => 'required'
        ];
    }
}