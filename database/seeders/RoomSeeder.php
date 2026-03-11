<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rooms')->insert([
            ['id_location'=>1,'room_name'=>'UMILD'],
            ['id_location'=>1,'room_name'=>'CIGARILLO'],
            ['id_location'=>2,'room_name'=>'SPP1'],
            ['id_location'=>3,'room_name'=>'SPP2']
        ]);
    }
}