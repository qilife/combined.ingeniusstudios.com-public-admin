<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['order' => 10, 'tier_id' => 1, 'name' => 'Master']);
        Category::create(['order' => 20, 'tier_id' => 1, 'name' => 'Life Force']);
        Category::create(['order' => 30, 'tier_id' => 1, 'name' => 'Quantum Meditation']);
        Category::create(['order' => 40, 'tier_id' => 1, 'name' => 'Spirituality']);
        Category::create(['order' => 50, 'tier_id' => 1, 'name' => 'Brain Boost']);
        Category::create(['order' => 60, 'tier_id' => 1, 'name' => 'Super Solfeggio']);
        Category::create(['order' => 70, 'tier_id' => 1, 'name' => 'Chakra Balancing']);
        Category::create(['order' => 80, 'tier_id' => 2, 'name' => 'Wellness I']);
        Category::create(['order' => 90, 'tier_id' => 2, 'name' => 'Wellness II']);
        Category::create(['order' => 100, 'tier_id' => 2, 'name' => 'Wellness III']);
        Category::create(['order' => 110, 'tier_id' => 2, 'name' => 'Life Force+']);
        Category::create(['order' => 120, 'tier_id' => 2, 'name' => 'Abundance Luck/Fortune']);
        Category::create(['order' => 130, 'tier_id' => 2, 'name' => 'Abundance Success']);
        Category::create(['order' => 140, 'tier_id' => 2, 'name' => 'Abundance Happiness']);
        Category::create(['order' => 150, 'tier_id' => 2, 'name' => 'Abundance Love']);
        Category::create(['order' => 160, 'tier_id' => 2, 'name' => 'Brain']);
        Category::create(['order' => 170, 'tier_id' => 2, 'name' => 'Wisdom']);
        Category::create(['order' => 180, 'tier_id' => 2, 'name' => 'Manifesting']);
        Category::create(['order' => 190, 'tier_id' => 2, 'name' => 'Transformation Meditation']);
        Category::create(['order' => 200, 'tier_id' => 2, 'name' => 'Protection']);
        Category::create(['order' => 210, 'tier_id' => 2, 'name' => 'Beauty I']);
        Category::create(['order' => 220, 'tier_id' => 2, 'name' => 'Beauty II']);
        Category::create(['order' => 230, 'tier_id' => 2, 'name' => 'Skin Care']);
        Category::create(['order' => 240, 'tier_id' => 2, 'name' => 'Fitness']);
        Category::create(['order' => 250, 'tier_id' => 3, 'name' => 'Abundance+']);
        Category::create(['order' => 260, 'tier_id' => 3, 'name' => 'Abundance Money']);
        Category::create(['order' => 270, 'tier_id' => 3, 'name' => 'Abundance Job/Career']);
        Category::create(['order' => 280, 'tier_id' => 3, 'name' => 'Abundance Business']);
        Category::create(['order' => 290, 'tier_id' => 3, 'name' => 'Super Brain']);
        Category::create(['order' => 300, 'tier_id' => 3, 'name' => 'Manifesting+']);
        Category::create(['order' => 310, 'tier_id' => 3, 'name' => 'Psychic Ability']);
        Category::create(['order' => 320, 'tier_id' => 3, 'name' => 'Mind Expansion']);

        // Category::create(['order' => 0, 'tier_id' => 1, 'name' => 'MASTER']);
        // Category::create(['order' => 1, 'tier_id' => 1, 'name' => 'ABUNDANCE I']);
        // Category::create(['order' => 2, 'tier_id' => 1, 'name' => 'ABUNDANCE II']);
        // Category::create(['order' => 3, 'tier_id' => 2, 'name' => 'HIGHER QUANTUM']);
        // Category::create(['order' => 4, 'tier_id' => 3, 'name' => 'INNER CIRCLE']);
    }
}
