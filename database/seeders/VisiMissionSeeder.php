<?php

namespace Database\Seeders;

use App\Models\VisiMission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMission::create([
            'vision' => '<p>Menjadi perusahaan jasa laundry profesional dengan mengedapankan hasil dan kualitas terbaik.</p>',
            'mission' => ' <p>Memberikan kualitas pencucian yang suci, bersih dan rapi.</p>

<p>Memberikan pelayanan profesional dengan berbasis pada ketepatan waktu dalam pengantaran laundry.</p>

<p>Memiliki komitment terhadap kesepakatan kerjasama.</p>

<p>Menjadi penyedia jasa yang memiliki kemampuan pengelolaan emosi dalam memberikan solusi jika terjadi masalah.</p>'
        ]);
    }
}
