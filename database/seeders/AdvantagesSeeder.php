<?php

namespace Database\Seeders;

use App\Models\Advantages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = [
            [
                'title' => 'Satu-satunya laundry hotel profesional di Karawang',
                'desc' => ' Laundry ini adalah satu-satunya layanan laundry di Karawang yang melayani khusus hotel dengan standar kebersihan dan kualitas tinggi yang dibutuhkan oleh industri perhotelan.'
            ],
            [
                'title' => 'Berada di lokasi yang strategis di tengah kota Karawang',
                'desc' => 'Terletak dipusat kota, lokasi laundry ini sangat mudah dijangkau dari berbagai sudut kota, memudahkan akses bagi hotel-hotel di sekitarnya.'
            ],
            [
                'title' => 'Memiliki beberapa anak cabang yang tersebar di beberapa tempat diKarawang',
                'desc' => 'Selain lokasi utamanya, laundry ini memiliki beberapa cabang lain yang tersebar, memungkinkan lebih banyak pelanggan untuk mendapatkan layanan dengan mudah.'

            ],
            [
                'title' => 'Dikerjakan dengan menggunakan mesin berteknologi',
                'desc' => 'Proses pencucian menggunakan mesin-mesin modern dan berteknologi tinggi, memastikan hasil cucian yang lebih bersih, lebih cepat, dan kain tetap terawat dengan baik.'
            ],
        ];

        foreach ($content as $item) {
            Advantages::create([
                'title' => $item['title'],
                'description' =>  $item['desc']
            ]);
        }
    }
}
