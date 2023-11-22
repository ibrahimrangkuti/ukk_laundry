<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'outlet_id' => 1,
                'nama' => 'Kasir Outlet 1',
                'email' => 'kasiroutlet1@gmail.com',
                'username' => 'kasir-outlet1',
                'password' => bcrypt('kasir123'),
                'role' => 'kasir'
            ],
            [
                'outlet_id' => 1,
                'nama' => 'Owner Outlet 1',
                'email' => 'owneroutlet1@gmail.com',
                'username' => 'owner-outlet1',
                'password' => bcrypt('owner123'),
                'role' => 'owner'
            ]
        ]);
    }
}
