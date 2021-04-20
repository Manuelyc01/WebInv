<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactoDenuncia extends Model
{
    protected $table = 'contacto_denuncia';

    public $fillable = [
        'identificador',
        'sede',
        'tipo',
        'identificarse',
        'nombres',
        'dni',
        'telefono',
        'correo',
        'arrayInvolucrados',
        'sospecha',
        'denunciaMensaje',
        'checkTerminos',
        'archivo',
        'fecha'
    ];
    
    protected $casts =[
        'arrayInvolucrados' => 'array',
    ];
}