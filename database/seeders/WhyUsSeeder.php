<?php

namespace Database\Seeders;

use App\Models\WhyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhyUs::create([
            'photo' => 'whyUs/service-details-1.jpg',
            'description' => '<p>Dewi Laundry menawarkan lebih dari sekadar jasa mencuci dan menyetrika. Kami menyediakan solusi laundry yang komprehensif, dirancang untuk memenuhi kebutuhan unik setiap pelanggan.</p>

<p>Dengan layanan yang profesional dan didukung oleh peralatan modern, kami menjamin kualitas hasil laundry yang optimal.</p>

<p>Kami juga menawarkan fleksibilitas dalam pelayanan, mulai dari pilihan paket yang sesuai dengan kebutuhan Anda hingga layanan antar-jemput yang memudahkan. Pilih Dewi Laundry untuk kenyamanan, kepercayaan, dan hasil yang terbaik setiap kali Anda membutuhkan solusi laundry.</p>'
        ]);
    }
}
