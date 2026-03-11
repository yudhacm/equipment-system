<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusDataSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('status_data')->insert([
            [
                'condition_status'=>'Scope',
                'status'=>'Ok',
                'remarks'=>''
            ],
            [
                'condition_status'=>'Outscope',
                'status'=>'Ok',
                'remarks'=>'Spare'
            ],
            [
                'condition_status'=>'Increase',
                'status'=>'',
                'remarks'=>''
            ],
            [
                'condition_status'=>'Decrease',
                'status'=>'',
                'remarks'=>''
            ]
        ]);
    }
}
