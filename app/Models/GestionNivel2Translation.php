<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionNivel2Translation extends Model
{
    protected $table = 'gestion_nivel2_translations';

    public $fillable = [
        'titulo',
        'des',
        'array',
        'slug'
    ];
    
    protected $casts =[
        'array' => 'array',
    ];
    
    public function setTituloAttribute($value)
	{
        $this->attributes['titulo'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
    
}