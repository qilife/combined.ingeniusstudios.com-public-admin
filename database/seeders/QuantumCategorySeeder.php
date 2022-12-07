<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class QuantumCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['order' => 10, 'tier_id' => 1, 'name' => 'Life Force']);
        Category::create(['order' => 20, 'tier_id' => 1, 'name' => 'Quantum Meditation']);
        Category::create(['order' => 30, 'tier_id' => 1, 'name' => 'Spirituality']);
        Category::create(['order' => 40, 'tier_id' => 1, 'name' => 'Brain Boost']);
        Category::create(['order' => 50, 'tier_id' => 2, 'name' => 'General']);
        Category::create(['order' => 60, 'tier_id' => 2, 'name' => 'Appearance']);
        Category::create(['order' => 70, 'tier_id' => 2, 'name' => 'Mood']);
        Category::create(['order' => 80, 'tier_id' => 2, 'name' => 'Immune']);
        Category::create(['order' => 90, 'tier_id' => 2, 'name' => 'Glands']);
        Category::create(['order' => 100, 'tier_id' => 2, 'name' => 'Physio']);
        Category::create(['order' => 110, 'tier_id' => 2, 'name' => 'Senses']);
        Category::create(['order' => 120, 'tier_id' => 2, 'name' => 'Organs']);
        Category::create(['order' => 130, 'tier_id' => 2, 'name' => 'Family']);
        Category::create(['order' => 140, 'tier_id' => 3, 'name' => 'Wellness I']);
        Category::create(['order' => 150, 'tier_id' => 3, 'name' => 'Wellness II']);
        Category::create(['order' => 160, 'tier_id' => 3, 'name' => 'Wellness III']);
        Category::create(['order' => 170, 'tier_id' => 3, 'name' => 'Life Force+']);
        Category::create(['order' => 180, 'tier_id' => 3, 'name' => 'Abundance Luck/Fortune']);
        Category::create(['order' => 335, 'tier_id' => 4, 'name' => 'Abundance Job/Career']);
        Category::create(['order' => 200, 'tier_id' => 3, 'name' => 'Abundance Success']);
        Category::create(['order' => 210, 'tier_id' => 3, 'name' => 'Abundance Happiness']);
        Category::create(['order' => 220, 'tier_id' => 3, 'name' => 'Abundance Love']);
        Category::create(['order' => 230, 'tier_id' => 3, 'name' => 'Brain']);
        Category::create(['order' => 240, 'tier_id' => 3, 'name' => 'Wisdom']);
        Category::create(['order' => 250, 'tier_id' => 3, 'name' => 'Manifesting']);
        Category::create(['order' => 260, 'tier_id' => 3, 'name' => 'Meditation / Spiritual']);
        Category::create(['order' => 270, 'tier_id' => 3, 'name' => 'Protection']);
        Category::create(['order' => 280, 'tier_id' => 3, 'name' => 'Beauty I']);
        Category::create(['order' => 290, 'tier_id' => 3, 'name' => 'Beauty II']);
        Category::create(['order' => 300, 'tier_id' => 3, 'name' => 'Skin Care']);
        Category::create(['order' => 310, 'tier_id' => 3, 'name' => 'Fitness']);
        Category::create(['order' => 320, 'tier_id' => 4, 'name' => 'Abundance+']);
        Category::create(['order' => 330, 'tier_id' => 4, 'name' => 'Abundance Money']);
        Category::create(['order' => 340, 'tier_id' => 4, 'name' => 'Abundance Business']);
        Category::create(['order' => 350, 'tier_id' => 4, 'name' => 'Super Brain']);
        Category::create(['order' => 360, 'tier_id' => 4, 'name' => 'Manifesting+']);
        Category::create(['order' => 370, 'tier_id' => 4, 'name' => 'Psychic Ability']);
        Category::create(['order' => 380, 'tier_id' => 4, 'name' => 'Mind Expansion']);
        Category::create(['order' => 390, 'tier_id' => 1, 'name' => 'Super Solfeggio']);
        Category::create(['order' => 400, 'tier_id' => 1, 'name' => 'Chakra Balancing']);
    }
}
