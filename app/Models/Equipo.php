<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'equipo';

	public $translatedAttributes = [
        'titulo',
        'subtitulo',
        'textoBtn'
	];

    protected $fillable = [        
        'imagen'
    ];

    
}