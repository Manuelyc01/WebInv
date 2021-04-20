<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'tituloB2' => 'required',
            'desB2' => 'required',
            'textoBtnB2' => 'required',
            'tituloB3' => 'required',
            'subtituloB3' => 'required',
            'tituloB4' => 'required',
            'desB4' => 'required',
            'textoBtnB4' => 'required',
            'tituloB5' => 'required',
            'subtituloB5' => 'required',
            'textoBtnB5' => 'required',
            'enlaceBtnB5' => 'required',
            'tituloB6' => 'required',
            'placeHolderB6' => 'required',
            'textoBtnB6' => 'required',
            'imgIzqB2' => 'required',
            'imgDerB2' => 'required',
            'imgHojaB3' => 'required',
            'imgFondoB4' => 'required',
            'coverVideoB4' => 'required',
            'imgHojaB5' => 'required'
        ];
    }
}