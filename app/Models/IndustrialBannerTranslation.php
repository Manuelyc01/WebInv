<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustrialBannerTranslation extends Model
{
    //
    protected $table = 'indus_banner_translations';

    public $fillable = [
        'banner'
    ];
}
