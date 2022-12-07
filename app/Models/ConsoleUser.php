<?php

namespace App\Models;

class ConsoleUser extends User
{
    protected $connection= 'console';

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function tier() {
        return $this->belongsToMany('App\Models\ConsoleTier', 'user_tier', 'user_id', 'tier_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Models\ConsoleCategory', 'user_category', 'user_id', 'category_id');
    }

    public function albums() {
        return $this->belongsToMany('App\Models\ConsoleAlbum', 'user_album', 'user_id', 'album_id');
    }
	
	/*public function tiers() {
        return $this->belongsToMany('App\Models\ConsoleTier', 'user_tier', 'user_id');
    }
	public function tier() {
        return $this->belongsToMany('App\Models\ConsoleTier', 'user_tier', 'user_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Models\ConsoleCategory', 'user_category', 'user_id');
    }

    public function albums() {
        return $this->belongsToMany('App\Models\ConsoleAlbum', 'user_album', 'user_id');
    }*/
}
