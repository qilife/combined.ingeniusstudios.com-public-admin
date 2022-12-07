<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuantumDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(QuantumTierSeeder::class);
        $this->call(QuantumCategorySeeder::class);
        $this->call(QuantumTagSeeder::class);
        $this->call(QuantumAlbumSeeder::class);
        $this->call(QuantumProgramSeeder::class);
        $this->call(QuantumPlaylistSeeder::class);
    }
}
