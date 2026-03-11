<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('equipment')->insert([
            [
                'id_category'=>1,
                'id_location'=>1,
                'id_frequency'=>3,
                'capacity'=>'2 PK'
            ],
            [
                'id_category'=>2,
                'id_location'=>2,
                'id_frequency'=>4,
                'capacity'=>'500 KVA'
            ]
        ]);
    }
}
