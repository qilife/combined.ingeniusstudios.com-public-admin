<?php

namespace App\Models;

class QuantumTier extends Tier
{
    protected $connection= 'quantum';
	
	public function categories(){
        return $this->hasMany('App\Models\QuantumCategory', 'tier_id');
    }
}
