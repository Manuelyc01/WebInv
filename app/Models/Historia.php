<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'historia';

	public $translatedAttributes = [
        'tituloB1',
        'desB1',
        'arrayB1',
        'tituloMisionB2',
        'subtituloMisionB2',
        'desMisionB2',
        'tituloVisionB2',
        'subtituloVisionB2',
        'desVisionB2',
        'tituloB3',
        'arrayB3',
        'tituloB4',
        'desB4',
        'arrayB4',
        'tituloB5',
        'textoBtn1B5',
        'array1B5',
        'titulo1B5',
        'subtitulo1B5',
        'des1B5',
        'textoBtn2B5',
        'array2B5',
        'titulo2B5',
        'subtitulo2B5',
        'des2B5'
	];

    protected $fillable = [        
        'imagenIzqB1',
        'imagenDerB1',
        'imgHojaIzqB2',
        'imgHojaDerB2',
        'imgB4'
    ];

    
}