<?php

namespace App\Models;

class ConsoleTrack extends Track
{
    protected $connection= 'console';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function album() {
        return $this->belongsTo('App\Models\ConsoleAlbum', 'album_id');
    }
}
