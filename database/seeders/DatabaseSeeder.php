<?php

namespace Database\Seeders;

use App\Models\BoardUniversity;
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
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            CountriesTableSeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            ProgramSeeder::class,
            BoardUniversitySeeder::class
        ]);
    }
}
