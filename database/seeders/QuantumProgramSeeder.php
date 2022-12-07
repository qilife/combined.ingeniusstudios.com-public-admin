<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class QuantumProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create(['order' => 0, 'name' => 'Relax', 'tracks' => '[7, 119, 7, 119, 564]']);
        Program::create(['order' => 1, 'name' => 'Meditate', 'tracks' => '[119, 354, 355, 42, 119]']);
        Program::create(['order' => 2, 'name' => 'Energize', 'tracks' => '[5, 8, 5, 8, 2]']);
        Program::create(['order' => 3, 'name' => 'Manifest', 'tracks' => '[119, 354, 355, 31, 31, 31, 119]']);
        Program::create(['order' => 4, 'name' => 'Abundance', 'tracks' => '[119, 31, 31, 31, 119]']);
        Program::create(['order' => 5, 'name' => 'Exercise', 'tracks' => '[5, 5, 8, 5, 563]']);
        Program::create(['order' => 6, 'name' => 'Sleep', 'tracks' => '[566, 119, 564]']);
        Program::create(['order' => 7, 'name' => 'Recharge', 'tracks' => '[2, 7, 5, 1, 563]']);
        Program::create(['order' => 8, 'name' => 'Recovery', 'tracks' => '[2, 674, 679, 681, 563]']);
        Program::create(['order' => 9, 'name' => 'Discomfort', 'tracks' => '[2, 681, 119]']);
        Program::create(['order' => 10, 'name' => 'Water Restructuring', 'tracks' => '[2, 1]']);
        Program::create(['order' => 11, 'name' => 'Detox', 'tracks' => '[2, 560, 649, 564]']);
        Program::create(['order' => 12, 'name' => 'Focus', 'tracks' => '[5, 351, 5]']);
        Program::create(['order' => 13, 'name' => 'Creativity', 'tracks' => '[119, 351, 119]']);
        Program::create(['order' => 14, 'name' => 'Intelligence', 'tracks' => '[351, 354, 355, 351]']);
        Program::create(['order' => 15, 'name' => 'Happy', 'tracks' => '[1, 91, 31, 119]']);
        Program::create(['order' => 16, 'name' => 'Love', 'tracks' => '[2, 6, 6, 6, 119]']);
        Program::create(['order' => 17, 'name' => 'Wake Up', 'tracks' => '[2, 119, 1]']);
        Program::create(['order' => 18, 'name' => 'Settle Down', 'tracks' => '[2, 1, 119]']);
        Program::create(['order' => 19, 'name' => 'Cold / Flu', 'tracks' => '[2, 564]']);
        Program::create(['order' => 20, 'name' => 'Gut Wellness', 'tracks' => '[2, 560, 816, 2]']);
        Program::create(['order' => 21, 'name' => 'Astral Travel', 'tracks' => '[308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 322, 323, 324, 325, 326, 327, 328, 329, 330, 331, 332, 333, 334, 335, 336, 337]']);
        Program::create(['order' => 22, 'name' => 'Sacred', 'tracks' => '[42, 119]']);
        Program::create(['order' => 23, 'name' => 'Explore', 'tracks' => '[51]']);
        Program::create(['order' => 24, 'name' => 'Center', 'tracks' => '[2, 563]']);
    }
}
