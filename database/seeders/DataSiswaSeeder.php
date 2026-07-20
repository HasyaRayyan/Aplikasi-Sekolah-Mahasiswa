<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataSiswa;

class DataSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Nama1', 'Nama2', 'Nama3', 'Nama4', 'Nama5',
            'Nama6', 'Nama7', 'Nama8', 'Nama9', 'Nama10'
        ];

        foreach ($names as $name) {
            DataSiswa::create([
                'name' => $name,
                'email' => strtolower($name) . '@example.com',
                'address' => 'Address for ' . $name,
                'birth_date' => '2000-01-01',
            ]);
        }
    }
}
