<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\InstitutionSeeder;
use Database\Seeders\BankAdminSeeder;
use Database\Seeders\InstitutionAdminSeeder;
use Database\Seeders\StudentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call other seeders here
        $this->call([
            InstitutionSeeder::class,
            BankAdminSeeder::class,
            InstitutionAdminSeeder::class,
            StudentSeeder::class,
            // Add other seeders as needed
        ]);
    }
}
