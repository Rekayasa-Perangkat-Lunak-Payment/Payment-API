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
        // Create adminbank user
        User::create([
            'username' => 'adminbank',
            'email' => 'admin@example.com',
            'password' => bcrypt('123123'),
        ]);

        // Create adminsekolah user
        User::create([
            'username' => 'adminsekolah',
            'email' => 'admin@example.com',
            'password' => bcrypt('123123'),
        ]);
    }
}
