<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['equipment_name' => 'AC'],
            ['equipment_name' => 'FLOW METER'],
            ['equipment_name' => 'PANEL'],
            ['equipment_name' => 'COMPRESSOR']
        ]);
    }
}