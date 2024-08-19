<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'description' => 'PT. KIMOZA PRIMA JAYA ( Dewi Laundry ) didirikan pada tahun 2018 dengan semangat untuk memberikan layanan laundry terbaik bagi masyarakat Karawang. Berawal dari usaha laundry rumahan, kami terus berkembang dan berinovasi hingga menjadi laundry profesional terdepan di Karawang.
                            Komitmen kami tidak hanya pada kebersihan dan ketepatan waktu, tetapi juga membangun kepercayaan dan menjalin hubungan jangka panjang dengan para pelanggan. Kami memahami kebutuhan hotel dan perusahaan di Karawang, dan kami dedikasikan layanan kami untuk memenuhi kebutuhan mereka dengan sepenuh hati.',
            'photo' => 'about/about.jpg'
        ]);
    }
}
