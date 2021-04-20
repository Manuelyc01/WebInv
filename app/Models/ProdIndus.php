<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdIndus extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'prod_indus';

	public $translatedAttributes = [
        'nombre',
        'slug',
        'des',
        'arrayPresentaciones',
        'fichaPDF',
        'arrayBeneficios',
        'tituloRelacionados'
	];

    protected $fillable = [        
        'imagenListado',
        'imagenFondo',
        'imagenFondoMobile',
        'imagenBeneficios',
        'imagenBeneficios2',
        'subcat_indus_id',
        'etiqueta_indus_id',
        'check_exportacion'
    ];

    public function SubcatIndustrial()
	{
		return $this->belongsTo(SubcatIndus::class, 'subcat_indus_id');
    }

    public function EtiquetaIndustrial()
	{
		return $this->belongsTo(EtiquetaIndus::class, 'etiqueta_indus_id');
    }

    public function ProductosIndustrialesRelacionados()
	{
		return $this->belongsToMany(ProdIndus::class, 'prod_indus_relacionado', 'prod_indus_id', 'rel_indus_id');
    }
    

    
}