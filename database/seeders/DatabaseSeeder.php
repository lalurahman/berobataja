<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Configuration;
use App\Models\Layanan;
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
        ]);

        User::create([
            'username' => 'riski',
            'email' => 'riski@gmail.com',
            'role' => 'mitra',
            'password' => bcrypt('password'),
            'is_active' => 1,
        ]);

        Configuration::create([
            'app_name' => 'Berobataja',
            'up_harga'  => 2000,
            'contact_admin' => '000000',
            'email' => 'email@email.com',
            'about_us'  => 'lorem ipsum dolor sit amet',
            'excerpt_about' => 'lorem ipsum dolor sit amet',
        ]);

        Layanan::create([
            'name'      => 'Terapy',
            'desc'      => 'lorem ipsum dolor sit amet',
            'excerpt'   => '-'
        ]);

        Layanan::create([
            'name'      => 'Psicotheraphy',
            'desc'      => 'lorem ipsum dolor sit amet',
            'excerpt'   => '-'
        ]);

        Layanan::create([
            'name'      => 'Pembersihan Luka',
            'desc'      => 'lorem ipsum dolor sit amet',
            'excerpt'   => '-'
        ]);

        Layanan::create([
            'name'      => 'Gigi',
            'desc'      => 'lorem ipsum dolor sit amet',
            'excerpt'   => '-'
        ]);
    }
}
