<?php

namespace App\Models;

class ConsoleTag extends Tag
{
    protected $connection= 'console';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function albums() {
        return $this->belongsToMany('App\Models\ConsoleAlbum', 'album_tag', 'tag_id', 'album_id');
    }
}
