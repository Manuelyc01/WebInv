<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriaRequest extends FormRequest
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
            'tituloB1' => 'required',
            'desB1' => 'required',
            'tituloMisionB2' => 'required',
            'subtituloMisionB2' => 'required',
            'desMisionB2' => 'required',
            'tituloVisionB2' => 'required',
            'subtituloVisionB2' => 'required',
            'desVisionB2' => 'required',
            'tituloB3' => 'required',
            'tituloB4' => 'required',
            'desB4' => 'required',
            'tituloB5' => 'required',
            'textoBtn1B5' => 'required',
            'titulo1B5' => 'required',
            'subtitulo1B5' => 'required',
            'des1B5' => 'required',
            'textoBtn2B5' => 'required',
            'titulo2B5' => 'required',
            'subtitulo2B5' => 'required',
            'des2B5' => 'required',
            'imagenIzqB1' => 'required',
            'imagenDerB1' => 'required',
            'imgHojaIzqB2' => 'required',
            'imgHojaDerB2' => 'required',
            'imgB4' => 'required'
        ];
    }
}