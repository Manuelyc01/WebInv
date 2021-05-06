<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerTranslation extends Model
{
    protected $table = 'banner_translations';

    public $fillable = [
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
    
}