<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // ADMIN
        User::create([
            'nama' => 'Admin Agro Jamur',
            'email' => 'agrojamurpabuwaran@gmail.com',
            'password' => Hash::make('pabuwaran123'),
            'role' => 'admin',
            'telepon' => '082138487484'
        ]);

        // CUSTOMER
        User::create([
            'nama' => 'Zahra Fitra',
            'email' => 'Zahra@gmail.com',
            'password' => Hash::make('zahra000'),
            'role' => 'customer',
            'telepon' => '085703565001'
        ]);

        User::create([
            'nama' => 'Carlita Wahyu',
            'email' => 'Carlita@gmail.com',
            'password' => Hash::make('carlita111'),
            'role' => 'customer',
            'telepon' => '08593264188108'
        ]);

        User::create([
            'nama' => 'Ittaqi Tafuzi',
            'email' => 'Ittaqi@gmail.com',
            'password' => Hash::make('ittaqi222'),
            'role' => 'customer',
            'telepon' => '082322012633'
        ]);

        User::create([
            'nama' => 'Faridz Akmal',
            'email' => 'Akmal@gmail.com',
            'password' => Hash::make('akmal333'),
            'role' => 'customer',
            'telepon' => '088212377682'
        ]);

    }
}