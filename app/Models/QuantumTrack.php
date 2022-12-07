<?php

namespace App\Models;

class QuantumTrack extends Track
{
    protected $connection= 'quantum';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function album() {
        return $this->belongsTo('App\Models\QuantumAlbum', 'album_id');
    }
}
