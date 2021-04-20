<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicioTranslation extends Model
{
    protected $table = 'servicio_translations';

    public $fillable = [
        'titulo',
        'des',
        'url',
        'pdf',
        'tipo'
    ];    
    
    
}