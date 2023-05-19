<?php

namespace Database\Seeders;
use App\Models\Goals;

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
        Goals::create([
            'image' => 'John Doe',
            'goals' => 'Operasi',
            'amount' => 4000000,
            'current' => 0,
            'balance' => 4000000,
            'duedate' => '2023-08-01-',
        ]);
    }
}
