<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDenuncia extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'tipo_denuncia';

	public $translatedAttributes = [
        'nombre'
	];

    protected $fillable = [   
        'orden'
    ];

    
}