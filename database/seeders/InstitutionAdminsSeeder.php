<?php

namespace Database\Seeders;

use App\Models\Institution;
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
        InstitutionAdmin::create([
            'user_id' => 2,
            'institution_id' => 1,
            'name' => 'Bank Admin',
            'title' => 'Biro Keuangan',
        ]);
    }
}
