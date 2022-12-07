<?php

namespace App\Models;

class QuantumCategory extends Category
{
    protected $connection= 'quantum';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function tier() {
        return $this->belongsTo('App\Models\QuantumTier');
    }

    public function albums() {
        return $this->hasMany('App\Models\QuantumAlbum');
    }
}
