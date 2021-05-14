<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerClientesTranslation extends Model
{
    protected $table = 'banner_clientes_translations';

    public $fillable = [
        'des',
        'fondoDesktop'
	];
    
}