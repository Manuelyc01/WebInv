<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SedeDenunciaTranslation extends Model
{
    protected $table = 'sede_denuncia_translations';

    public $fillable = [
        'nombre'
	];
    
}