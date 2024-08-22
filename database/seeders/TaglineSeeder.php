<?php

namespace Database\Seeders;

use App\Models\Tagline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaglineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tagline = [
            [
                'title' => 'Welcome to <span>Dewi Laundry</span>',
                'description' => 'Layanan Laundry Hotel Pertama dan Satu-satunya di
                        Karawang. Kami Menetapkan Standar Keunggulan, Memastikan Tamu Anda Merasakan Kemewahan Linen
                        yang Selalu Bersih Sempurna, Setiap Saat.',
            ],
            [
                'title' => 'Strategic Place',
                'description' => 'Nikmati layanan laundry yang efisien dan mudah diakses di jantung kota. Kami melayani hotel Anda dengan standar kebersihan yang tinggi dan kecepatan yang tak tertandingi.',
            ],
            [
                'title' => 'Profesional Laundry',
                'description' => 'Dapatkan layanan laundry profesional dengan standar kebersihan yang tinggi. Kami menggunakan teknologi canggih dan teknik terbaik untuk memastikan setiap item Anda bersih dan terawat dengan sempurna.',
            ],
        ];

        foreach ($tagline as $item) {

            Tagline::create([
                'title' => $item['title'],
                'description' => $item['description'],
            ]);
        }
    }
}
