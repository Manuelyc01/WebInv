<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdTradi extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'prod_tradi';

	public $translatedAttributes = [
        'nombre',
        'slug',
        'des',
        'zonaVenta',
        'array',
        'tituloRelacionados',
        'documento'
	];

    protected $fillable = [        
        'imagenListado',
        'etiqueta_tradi_id'
    ];

    public function EtiquetaTradicional()
	{
		return $this->belongsTo(EtiquetaTradi::class, 'etiqueta_tradi_id');
    }

    public function ProductosTradicionalesRelacionados()
	{
		return $this->belongsToMany(ProdTradi::class, 'prod_tradi_relacionado', 'prod_tradi_id', 'rel_tradi_id');
    }
    

    
}