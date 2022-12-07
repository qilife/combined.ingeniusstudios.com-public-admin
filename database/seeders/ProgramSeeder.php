<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create(['order' => 0, 'name' => 'Relax', 'tracks' => '[7, 33, 7, 33]']);
        Program::create(['order' => 1, 'name' => 'Meditate', 'tracks' => '[33, 16, 17, 33]']);
        Program::create(['order' => 2, 'name' => 'Energize', 'tracks' => '[5, 7, 5, 7, 2]']);
        Program::create(['order' => 3, 'name' => 'Manifest', 'tracks' => '[33, 16, 17, 43, 43, 43, 33]']);
        Program::create(['order' => 4, 'name' => 'Abundance', 'tracks' => '[33, 43, 43, 43, 33]']);
        Program::create(['order' => 5, 'name' => 'Exercise', 'tracks' => '[5, 5, 7, 5]']);
        Program::create(['order' => 6, 'name' => 'Water Restructuring', 'tracks' => '[2, 1]']);
        Program::create(['order' => 7, 'name' => 'Focus', 'tracks' => '[5, 13, 5]']);
        Program::create(['order' => 8, 'name' => 'Creativity', 'tracks' => '[33, 13, 33]']);
        Program::create(['order' => 9, 'name' => 'Intelligence', 'tracks' => '[13, 16, 17, 13]']);
        Program::create(['order' => 10, 'name' => 'Happy', 'tracks' => '[1, 32, 43, 33]']);
        Program::create(['order' => 11, 'name' => 'Love', 'tracks' => '[2, 6, 6, 6, 33]']);
    }
}
