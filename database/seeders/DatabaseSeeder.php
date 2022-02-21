<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Configuration;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'aswarkasim',
            'email' => 'aswarkasim@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
            'is_active' => 0,
            'mitra_id' => 1,
        ]);

        User::create([
            'username' => 'riski',
            'email' => 'riski@gmail.com',
            'role' => 'user',
            'password' => bcrypt('password'),
            'is_active' => 0,
            'mitra_id' => 1,
        ]);

        Configuration::create([
            'app_name' => 'KTC FW',
            'up_harga'  => 2000
        ]);
    }
}
