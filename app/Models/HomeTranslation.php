<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeTranslation extends Model
{
    protected $table = 'home_translations';

    public $fillable = [
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
    
}