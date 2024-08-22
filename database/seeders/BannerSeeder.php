<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner = [
            [
                'name' => 'banner about page',
                'banner' => 'banner/banner-1.jpg'
            ],
            [
                'name' => 'banner Service page',
                'banner' => 'banner/banner-2.jpg'
            ],
            [
                'name' => 'banner contact page',
                'banner' => 'banner/banner-3.jpg'
            ],
        ];

        foreach ($banner as $item) {

            Banner::create([
                'name' => $item['name'],
                'banner' => $item['banner']
            ]);
        }
    }
}
