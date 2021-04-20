<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //protected $guarded = ['id'];

    protected $fillable = [
    	'name',
        'slug',
        'permiso'
    ];

    protected $casts = [
        'permiso' => 'array'
    ];

    public function setNameAttribute($value)
	{
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}

    public function admin() {
    	return $this->hasMany('App\Admin');
    }
}
