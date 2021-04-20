<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactoGlobal extends Model
{
    protected $table = 'contacto_global';

    public $fillable = [
        'nombres',
        'apellidos',
        'empresa',
        'ruc',
        'telefono',
        'correo',
        'fecha',
        'mensaje',
        'check',
        'producto'
	];
}