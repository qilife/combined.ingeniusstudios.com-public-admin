<?php

namespace Database\Seeders;

use App\Models\Tier;
use Illuminate\Database\Seeder;

class QuantumTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tier::create(['order' => 10, 'name' => 'QUANTUM']);
        Tier::create(['order' => 20, 'name' => 'RIFE']);
        Tier::create(['order' => 30, 'name' => 'HIGHER QUANTUM']);
        Tier::create(['order' => 40, 'name' => 'INNER CIRCLE']);
    }
}
