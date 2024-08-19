<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gallery = [
            [
                "name" => "Kunjungan Batiqa",
                "photo" => "gallery/portfolio-5.jpg"
            ],
            [
                "name" => "Kunjungan Batiqa",
                "photo" => "gallery/portfolio-5.jpg"
            ],
            [
                "name" => "Kunjungan Mercure",
                "photo" => "gallery/portfolio-6.jpg"
            ],
            [
                "name" => "Team Ecolab",
                "photo" => "gallery/portfolio-7.jpg"
            ],
            [
                "name" => "Kunjungan Voxstay",
                "photo" => "gallery/portfolio-8.jpg"
            ],
            [
                "name" => "Kunjungan Novotel",
                "photo" => "gallery/portfolio-9.jpg"
            ],
            [
                "name" => "Kunjungan Brits",
                "photo" => "gallery/portfolio-5.jpg"
            ],
            [
                "name" => "Kunjungan President",
                "photo" => "gallery/portfolio-6.jpg"
            ],
            [
                "name" => "Kunjungan Bupati",
                "photo" => "gallery/portfolio-7.jpg"
            ],
        ];

        foreach ($gallery as $item) {

            Galery::create([
                'name' => $item['name'],
                'photo' => $item['photo']
            ]);
        };
    }
}
