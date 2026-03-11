<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EquipmentHistorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('equipment_history')->insert([
            [
                'id_equipment'=>1,
                'before_location'=>1,
                'after_location'=>2,
                'history_date'=>'2025-01-10',
                'file_upload'=>null,
                'description'=>'Moved to Building B'
            ]
        ]);
    }
}