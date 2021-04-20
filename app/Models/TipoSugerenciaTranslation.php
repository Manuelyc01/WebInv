<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSugerenciaTranslation extends Model
{
    protected $table = 'tipo_sugerencia_translations';

    public $fillable = [
        'nombre'
	];
    
}