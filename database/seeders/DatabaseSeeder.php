<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EmployeeSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@arafy.es',
            'password' => bcrypt('123123123'),
        ]);

    }
}
