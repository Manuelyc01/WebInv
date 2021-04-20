<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionNivel3bTranslation extends Model
{
    protected $table = 'gestion_nivel3b_translations';

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