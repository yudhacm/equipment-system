<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],
            [
                'username' => 'client',
                'email' => 'client@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'client'
            ]
        ]);
    }
}
