<?php

namespace App\Models;

class ConsoleAlbum extends Album
{
    protected $connection= 'console';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function category() {
        return $this->belongsTo('App\Models\ConsoleCategory');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\ConsoleTag', 'album_tag', 'album_id', 'tag_id');
    }

    public function tracks() {
        return $this->hasMany('App\Models\ConsoleTrack', 'album_id');
    }
}
