<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriaTranslation extends Model
{
    protected $table = 'historia_translations';

    public $fillable = [
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
    
    protected $casts =[
        'arrayB1' => 'array',
        'arrayB3' => 'array',
        'arrayB4' => 'array',
        'array1B5' => 'array',
        'array2B5' => 'array'
    ];   
    
}