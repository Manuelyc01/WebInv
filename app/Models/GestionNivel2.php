<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionNivel2 extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'gestion_nivel2';

	public $translatedAttributes = [
        'titulo',
        'des',
        'array',
        'slug'
	];

    protected $fillable = [        
        'gestion_nivel1_id'
    ];

    public function GestionNivel1()
	{
		return $this->belongsTo(GestionNivel1::class, 'gestion_nivel1_id');
    }

    public function GestionNivel3()
	{
		return $this->hasMany(GestionNivel3::class);
    }

    
}