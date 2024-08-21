<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123'),
        ]);

        $this->call([
            AboutSeeder::class,
            AdvantagesSeeder::class,
            MachinesSeeder::class,
            ServiceSeeder::class,
            GalerySeeder::class,
            ContactSeeder::class,
            VisiMissionSeeder::class,
            TeamSeeder::class,
            WhyUsSeeder::class
        ]);
    }
}
