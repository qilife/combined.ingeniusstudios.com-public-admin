<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class QuantumTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['order' => 0, 'name' => 'Abundance']);
        Tag::create(['order' => 1, 'name' => 'Brain']);
        Tag::create(['order' => 2, 'name' => 'Emotions']);
        Tag::create(['order' => 3, 'name' => 'Wellness']);
        Tag::create(['order' => 4, 'name' => 'Meditation']);
        Tag::create(['order' => 5, 'name' => 'Manifesting']);
        Tag::create(['order' => 6, 'name' => 'Relationships']);
        Tag::create(['order' => 7, 'name' => 'Spirit']);
    }
}
