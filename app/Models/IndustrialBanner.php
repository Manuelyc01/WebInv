<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustrialBanner extends Model
{
    //
    use \Dimsav\Translatable\Translatable;
    protected $table = 'industrial_banners';

	public $translatedAttributes = [
        'banner',
        'locale'
	];

    protected $fillable = [        
        'orden'
    ];
}
