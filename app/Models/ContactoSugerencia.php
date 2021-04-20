<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactoSugerencia extends Model
{
    protected $table = 'contacto_sugerencia';

    public $fillable = [
        'tipo',
        'correo',
        'nombres',
        'telefono',
        'documento',
        'nacionalidad',
        'mensaje',
        'check',
        'formaContacto',
        'fecha'
	];
}