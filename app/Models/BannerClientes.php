<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerClientes extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'banner_clientes';

	public $translatedAttributes = [
        'des',
        'fondoDesktop'
	];

    protected $fillable = [        
        'orden'
    ];

    
}