<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('locations')->insert([
            ['location_name' => 'ATB'],
            ['location_name' => 'GLT 1'],
            ['location_name' => 'GLT 2']
        ]);
    }
}
