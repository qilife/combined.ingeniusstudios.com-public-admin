<?php

namespace App\Models;

class QuantumUser extends User
{
    protected $connection= 'quantum';
	protected $fillable = ['name', 'email', 'password', 'created_at', 'uuid', 'os', 'is_active', 'is_admin', 'fb_id', 'gg_id', 'tw_id','register', 'apple_id', 'phone'];
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function tier() {
        return $this->belongsToMany('App\Models\QuantumTier', 'user_tier', 'user_id', 'tier_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Models\QuantumCategory', 'user_category', 'user_id', 'category_id');
    }

    public function albums() {
        return $this->belongsToMany('App\Models\QuantumAlbum', 'user_album', 'user_id', 'album_id');
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
