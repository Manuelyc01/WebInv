<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrabajoTranslation extends Model
{
    protected $table = 'trabajo_translations';

    public $fillable = [
        'titulo',
        'des',
        'url',
        'pdf',
        'tipo'
	];
    
}