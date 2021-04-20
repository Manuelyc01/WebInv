<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionNivel3 extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'gestion_nivel3';

	public $translatedAttributes = [
        'nombre',
        'slug'
	];

    protected $fillable = [        
        'gestion_nivel2_id'
    ];

    public function GestionNivel2()
	{
		return $this->belongsTo(GestionNivel2::class, 'gestion_nivel2_id');
    }

    public function GestionNivel3b()
	{
		return $this->hasMany(GestionNivel3b::class);
    }

    
}