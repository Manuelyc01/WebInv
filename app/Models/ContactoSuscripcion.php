<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactoSuscripcion extends Model
{
    protected $table = 'contacto_suscripcion';

    public $fillable = [
        'correo',
        'fecha'
	];
}