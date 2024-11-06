<?php

namespace Database\Seeders;

use App\Models\BankAdmin;
use Illuminate\Database\Seeder;

class BankAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 2; $i++) {
            BankAdmin::create([
                'username' => $faker->userName,
                'password' => $faker->password
            ]);
        }
    }
}
