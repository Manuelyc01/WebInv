<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtiquetaTradiTranslation extends Model
{
    protected $table = 'etiqueta_tradi_translations';

    public $fillable = [
        'nombre'
    ];    
   
}