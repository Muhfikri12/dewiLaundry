<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = [
            [
                'name' => 'Guest Laundry',
                'photo' => 'service/example1.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus excepturi asperiores reprehenderit eius facilis veniam ratione blanditiis culpa nam!'
            ],
            [
                'name' => 'Linen Laundry',
                'photo' => 'service/example2.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus excepturi asperiores reprehenderit eius facilis veniam ratione blanditiis culpa nam!'
            ],
            [
                'name' => 'Rent Linen Room',
                'photo' => 'service/example3.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus excepturi asperiores reprehenderit eius facilis veniam ratione blanditiis culpa nam!'
            ],
            [
                'name' => 'Carpet, Bedcover & Etc',
                'photo' => 'service/example4.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus excepturi asperiores reprehenderit eius facilis veniam ratione blanditiis culpa nam!'
            ],
            [
                'name' => 'Uniform Laundry',
                'photo' => 'service/example5.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus excepturi asperiores reprehenderit eius facilis veniam ratione blanditiis culpa nam!'
            ],
        ];

        foreach ($service as $item) {
            Service::create([
                'title' => $item['name'],
                'image' => $item['photo'],
                'description' => $item['description']
            ]);
        }
    }
}
