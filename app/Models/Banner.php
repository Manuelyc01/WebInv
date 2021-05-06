<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'banner';

	public $translatedAttributes = [
        'titulo',
        'des',
        'textoBtn',
        'enlaceBtn',
        'enlaceFacebook',
        'enlaceInstagram',
        'enlaceWhatsapp',
        'fondoDesktop',
        'fondoMobile'
	];

    protected $fillable = [        
        'orden'
    ];

    
}