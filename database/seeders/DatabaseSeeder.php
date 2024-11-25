<?php

namespace Database\Seeders;

use App\Models\Institution;
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
        // Call other seeders here
        $this->call([
            InstitutionsSeeder::class,
            UserSeeder::class,
            BankAdminsSeeder::class,
            InstitutionAdminsSeeder::class,
        ]);
    }
}
