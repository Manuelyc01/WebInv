<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntegranteTranslation extends Model
{
    protected $table = 'integrante_translations';

    public $fillable = [
        'nombreCompleto',
        'telefono',
        'correo',
        'direccion',
        'des'
	];
    
}