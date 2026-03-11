<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            LocationSeeder::class,
            RoomSeeder::class,
            FrequencySeeder::class,
            StatusDataSeeder::class,
            EquipmentSeeder::class,
            EquipmentStatusSeeder::class,
            EquipmentHistorySeeder::class,
        ]);
    }
}