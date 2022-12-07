<?php

namespace App\Models;

class ConsoleTier extends Tier
{
    protected $connection= 'console';
	
	public function categories(){
        return $this->hasMany('App\Models\ConsoleCategory', 'tier_id');
    }
}
