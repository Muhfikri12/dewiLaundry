<?php

namespace Database\Seeders;

use App\Models\Machines;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $machine = [
            [
                'name' => 'Kapsul 40Kg',
                'photo' => 'machine/portfolio-1.jpg',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, incidunt.'
            ],
            [
                'name' => 'Dryer 40Kg',
                'photo' => 'machine/portfolio-2.jpg',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio accusantium iusto accusamus obcaecati. Minima in atque maxime iure reprehenderit.'
            ],
            [
                'name' => 'Dryer 30Kg',
                'photo' => 'machine/portfolio-3.jpg',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio accusantium iusto accusamus obcaecati. Minima in atque maxime iure reprehenderit.'
            ],
            [
                'name' => 'Extractor 40Kg',
                'photo' => 'machine/portfolio-4.jpg',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio accusantium iusto accusamus obcaecati. Minima in atque maxime iure reprehenderit.'
            ],
            [
                'name' => 'Frond Loading 40Kg',
                'photo' => 'machine/portfolio-5.jpg',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio accusantium iusto accusamus obcaecati. Minima in atque maxime iure reprehenderit.'
            ],
            [
                'name' => 'Dryer 20Kg',
                'photo' => 'machine/portfolio-6.jpg',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio accusantium iusto accusamus obcaecati. Minima in atque maxime iure reprehenderit.'
            ],
        ];

        foreach ($machine as $item) {

            Machines::create([
                'name' => $item['name'],
                'photo' => $item['photo'],
                'description' => $item['desc'],
            ]);
        }
    }
}
