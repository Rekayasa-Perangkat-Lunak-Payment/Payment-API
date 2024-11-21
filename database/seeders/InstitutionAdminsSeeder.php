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

        for ($i = 0; $i < 1; $i++) {
            InstitutionAdmin::create([
                'user_id' => 2,
                'institution_id' => 1,
                'name' => 'Institution Admin',
                'title' => $faker->jobTitle,
            ]);
        }
    }
}
