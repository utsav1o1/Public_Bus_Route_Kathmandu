<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('routes')->insert([
        ['name' => 'Lagankhel-Buspark'],
        ['name' => 'Lagankhel-Budhanilkantha'],
        ['name' => 'Bungmati-Budhanilkantha'],
        ['name' => 'Ratnapark-Godawari'],
        ['name' => 'Ratnapark-Lamatar'],
        ['name' => 'Lagankhel-Thankot'],
        ['name' => 'Swayambhu-Suryabinayak'],
        ['name' => 'New Bus Park-Kamalbinayak'],
        ['name' => 'New Bus Park-Lagankhel Airport'],
        ['name' => 'Lagankhel-Dakshinkali'],
        ]);
    }
}
