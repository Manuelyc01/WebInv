<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionNivel1 extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'gestion_nivel1';

	public $translatedAttributes = [
        'nombre'
	];

    protected $fillable = [        
        'orden'
    ];

    public function GestionNivel2()
	{
		return $this->hasMany(GestionNivel2::class);
    }

    
}