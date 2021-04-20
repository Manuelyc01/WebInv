<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionNivel3b extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'gestion_nivel3b';

	public $translatedAttributes = [
        'titulo',
        'des',
        'array',
        'slug'
	];

    protected $fillable = [        
        'gestion_nivel3_id'
    ];

    public function GestionNivel3()
	{
		return $this->belongsTo(GestionNivel3::class, 'gestion_nivel3_id');
    }

    
}