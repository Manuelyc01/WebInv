<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipoTranslation extends Model
{
    protected $table = 'equipo_translations';

    public $fillable = [
        'titulo',
        'subtitulo',
        'textoBtn'
	];
    
}