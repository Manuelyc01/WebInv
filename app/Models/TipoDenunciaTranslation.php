<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDenunciaTranslation extends Model
{
    protected $table = 'tipo_denuncia_translations';

    public $fillable = [
        'nombre'
	];
    
}