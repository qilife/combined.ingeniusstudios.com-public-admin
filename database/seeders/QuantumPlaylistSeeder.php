<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Seeder;

class QuantumPlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Playlist::create(['order' => 0, 'name' => 'Technology', 'youtube_id' => 'PL0b9PBI_x33jj5S5eCMqjetvZMHwHH6ee&']);
        Playlist::create(['order' => 1, 'name' => 'Get Started', 'youtube_id' => 'PL0b9PBI_x33iqTJw3iIXX1L5XFUAD9bhZ']);
        Playlist::create(['order' => 2, 'name' => 'Education', 'youtube_id' => 'PL0b9PBI_x33jqoDVAmMGRHZE-aVX8pAdh']);
        Playlist::create(['order' => 3, 'name' => 'Webinars', 'youtube_id' => 'PLfYMrEnrIq3UniMor5H0jIGRhAPoBXXH3']);
        Playlist::create(['order' => 4, 'name' => 'FAQ', 'youtube_id' => 'PL0b9PBI_x33j5xTlpnbkijtiCo0BKV6a8']);
        Playlist::create(['order' => 5, 'name' => 'Reviews', 'youtube_id' => 'PL0b9PBI_x33g1QwvJrpR2LMrelsWyBLbR']);
    }
}
