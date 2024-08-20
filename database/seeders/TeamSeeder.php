<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Yusuf Agung Nugroho',
                'photo' => 'team/team-1.jpg',
                'position' => 'Owner'
            ],
            [
                'name' => 'Ilham Bahtiar',
                'photo' => 'team/team-2.jpg',
                'position' => 'Grand Manager'
            ],
            [
                'name' => 'Yubi Abdillah',
                'photo' => 'team/team-3.jpg',
                'position' => 'Manager Operational'
            ],
        ];

        foreach ($teams as $item) {

            Team::create([
                'name' => $item['name'],
                'photo' => $item['photo'],
                'position' => $item['position'],
            ]);
        }
    }
}
