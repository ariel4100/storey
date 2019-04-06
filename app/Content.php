<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'image', 'icon', 'title','subtitle','text','ficha','section','type','order','remove',
    ];

    public function scopeSeccionTipo($query, $seccion, $tipo) {
        return $query->where(['section' => $seccion, 'type' => $tipo]);
    }
}
