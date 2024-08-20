<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Dewi Laundry',
            'email' => 'dewilaundry@gmail.com',
            'logo' => 'logo/logo_.png',
            'phone' => '+62812345678'
        ]);
    }
}
