<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EquipmentStatusSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('equipment_status')->insert([
            [
                'id_equipment'=>1,
                'id_data_status'=>1,
                'year'=>2025
            ],
            [
                'id_equipment'=>2,
                'id_data_status'=>2,
                'year'=>2025
            ]
        ]);
    }
}
