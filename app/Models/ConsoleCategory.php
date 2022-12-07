<?php

namespace App\Models;

class ConsoleCategory extends Category
{
    protected $connection= 'console';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function tier() {
        return $this->belongsTo('App\Models\ConsoleTier');
    }

    public function albums() {
        return $this->hasMany('App\Models\ConsoleAlbum');
    }
}
