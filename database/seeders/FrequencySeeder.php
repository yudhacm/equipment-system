<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FrequencySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('frequencies')->insert([
            ['frequency_time'=>'1 Bulan'],
            ['frequency_time'=>'2 Bulan'],
            ['frequency_time'=>'3 Bulan'],
            ['frequency_time'=>'4 Bulan'],
            ['frequency_time'=>'5 Bulan'],
            ['frequency_time'=>'6 Bulan'],
            ['frequency_time'=>'7 Bulan'],
            ['frequency_time'=>'8 Bulan'],
            ['frequency_time'=>'9 Bulan'],
            ['frequency_time'=>'10 Bulan'],
            ['frequency_time'=>'11 Bulan'],
            ['frequency_time'=>'12 Bulan']
        ]);
    }
}
