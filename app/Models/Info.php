<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'info';

	public $translatedAttributes = [
        'enlaceBlog',
        'enlaceTransparencia',
        'enlaceCocaleros',
        'enlaceFE',
        'codEticaPDF',
        'terminosPDF',
        'privacidadDatosPDF',
        'facebookEnaco',
        'facebookDelisse',
        'facebookKintu',
        'ciudadBase',
        'tlfCiudadBase',
        'celCiudadBase',
        'ciudadProv',
        'tlfCiudadProv',
        'celCiudadProv',
        'tituloProductos',
        'subtituloProductos',
        'tituloGracias',
        'desGracias',
        'tituloGraciasDe',
        'desGraciasDe',
        'tituloSedes',
        'tituloContactanos',
        'desContactanos',
        'arrayContactanos',
        'array2Contactanos',
        'tituloGestion',
        'subtituloGestion',
        'tituloTrabajo',
        'subtituloTrabajo',
        'tituloServiciosB1',
        'subtituloServiciosB1',
        'tituloServiciosB2',
        'desServiciosB2',
        'pdfServiciosB2',
        'tituloSugerencia',
        'tituloDenuncia',
        'desDenuncia',
        'intranet',
        'tde'
	];

    protected $fillable = [        
        'correoWeb',
        'correoFormSuscribete',
        'correoFormContactanos',
        'correoFormSugerencias',
        'correoFormDenuncias',
        'activarIdioma'
    ];
}