<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'email' => 'admin@example.com',
            'password' => bcrypt('zYtD?d-6&!6EfTTS'),
            'name' => 'Admin',
        ]);
        // $admin->assignRole('admin');
        $admin->is_admin = true;
        $admin->save();
    }
}
