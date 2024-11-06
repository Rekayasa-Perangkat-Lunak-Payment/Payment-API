<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InstitutionAdmin;

class InstitutionAdminsSeeder extends Seeder
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
            InstitutionAdmin::create([
                'institution_id' => 1,
                'name' => $faker->name,
                'title' => $faker->jobTitle,
                'username' => $faker->userName,
                'password' => $faker->password
            ]);
        }
    }
}
