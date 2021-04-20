<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DictionaryTranslation extends Model
{
    protected $table = 'dictionary_translations';

    public $fillable = [
        'static_text'
    ];

	public $timestamps = false;
}