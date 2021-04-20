<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'home';

	public $translatedAttributes = [
        'tituloB2',
        'desB2',
        'textoBtnB2',
        'tituloB3',
        'subtituloB3',
        'tituloB4',
        'desB4',
        'enlaceVideoB4',
        'textoBtnB4',
        'tituloB5',
        'subtituloB5',
        'textoBtnB5',
        'enlaceBtnB5',
        'tituloB6',
        'placeHolderB6',
        'textoBtnB6'
	];

    protected $fillable = [        
        'imgIzqB2',
        'imgDerB2',
        'imgHojaB3',
        'imgFondoB4',
        'coverVideoB4',
        'imgHojaB5'
    ];

    
}