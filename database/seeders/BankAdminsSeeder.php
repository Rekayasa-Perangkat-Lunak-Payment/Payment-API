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
        BankAdmin::create([
            'user_id' => 1,
            'name' => 'Bank Admin',
            'nik' => '1234567890',
        ]);
    }
}
