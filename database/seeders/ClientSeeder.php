<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\WhyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = [
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-1.png'
            ],
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-2.png'
            ],
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-3.png'
            ],
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-4.png'
            ],
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-5.png'
            ],
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-6.png'
            ],
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-7.png'
            ],
            [
                'name' => 'Batiqa',
                'logo' => 'clients/client-8.png'
            ],
        ];

        foreach ($client as $item) {

            Client::create([
                'name' => $item['name'],
                'logo' => $item['logo']
            ]);
        }
    }
}
