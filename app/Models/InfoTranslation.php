<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoTranslation extends Model
{
    protected $table = 'info_translations';

    public $fillable = [
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
        'arrayTiposSugerencia',
        'tituloDenuncia',
        'desDenuncia',
        'intranet',
        'tde'
    ];
    
    protected $casts =[
        'arrayContactanos' => 'array',
        'array2Contactanos' => 'array'
    ];
    
}