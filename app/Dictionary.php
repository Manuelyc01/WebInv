<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = [
        'static_text'
    ];

    protected $fillable = [
        'slug'
    ];

	public $timestamps = false;
}