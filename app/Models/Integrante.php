<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'integrante';

	public $translatedAttributes = [
        'nombreCompleto',
        'telefono',
        'correo',
        'direccion',
        'des'
	];

    protected $fillable = [        
        'imagen',
        'orden',
        'cargo_id',
        'niveles_id'
    ];

    public function Cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    public function Niveles()
    {
        return $this->belongsTo(Niveles::class, 'niveles_id');
    }
}