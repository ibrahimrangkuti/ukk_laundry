<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Outlet;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::insert([
            [
                'nama' => 'Outlet 1',
                'alamat' => 'Bumi Anugerah',
                'tlp' => '081234567890'
            ],
            [
                'nama' => 'Outlet 2',
                'alamat' => 'Taman Raya',
                'tlp' => '08987654321'
            ],
            [
                'nama' => 'Outlet 3',
                'alamat' => 'Rajeg Asri',
                'tlp' => '08123774821'
            ]
        ]);
    }
}
