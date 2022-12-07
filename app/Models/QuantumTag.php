<?php

namespace App\Models;

class QuantumTag extends Tag
{
    protected $connection= 'quantum';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function albums() {
        return $this->belongsToMany('App\Models\QuantumAlbum', 'album_tag', 'tag_id', 'album_id');
    }
}
