<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'enlaceBlog' => 'required',
            'enlaceTransparencia' => 'required',
            'enlaceCocaleros' => 'required',
            'enlaceFE' => 'required',
            'terminosPDF' => 'required',
            'facebookEnaco' => 'required',
            'facebookDelisse' => 'required',
            'facebookKintu' => 'required',
            'tituloProductos' => 'required',
            'subtituloProductos' => 'required',
            'tituloGracias' => 'required',
            'desGracias' => 'required',
            'tituloGraciasDe' => 'required',
            'desGraciasDe' => 'required',
            'tituloSedes' => 'required',
            'tituloContactanos' => 'required',
            'desContactanos' => 'required',
            'tituloGestion' => 'required',
            'subtituloGestion' => 'required',
            'tituloTrabajo' => 'required',
            'subtituloTrabajo' => 'required',
            'tituloServiciosB1' => 'required',
            'subtituloServiciosB1' => 'required',
            'tituloServiciosB2' => 'required',
            'desServiciosB2' => 'required',
            'pdfServiciosB2' => 'required',
            'tituloSugerencia' => 'required',
            'tituloDenuncia' => 'required',
            'desDenuncia' => 'required',
            'correoWeb' => 'required',
            'correoFormSuscribete' => 'required',
            'correoFormContactanos' => 'required',
            'correoFormSugerencias' => 'required',
            'correoFormDenuncias' => 'required',
            'activarIdioma' => 'required'
        ];
    }
}