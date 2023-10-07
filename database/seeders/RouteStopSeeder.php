<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('route_stops')->insert([
            ['route_id' => 1, 'stop_id' => 93, 'sequence' => 1],
            ['route_id' => 1, 'stop_id' => 151, 'sequence' => 2],
            ['route_id' => 1, 'stop_id' => 152, 'sequence' => 3],
            ['route_id' => 1, 'stop_id' => 153, 'sequence' => 4],
            ['route_id' => 1, 'stop_id' => 154, 'sequence' => 5],
            ['route_id' => 1, 'stop_id' => 60, 'sequence' => 6],   
            ['route_id' => 1, 'stop_id' => 5, 'sequence' => 7],
            ['route_id' => 1, 'stop_id' => 155, 'sequence' => 8],
            ['route_id' => 1, 'stop_id' => 138, 'sequence' => 9],   
            ['route_id' => 1, 'stop_id' => 156, 'sequence' => 10],
            ['route_id' => 1, 'stop_id' => 157, 'sequence' => 11],
            ['route_id' => 1, 'stop_id' => 10, 'sequence' => 12],
            ['route_id' => 1, 'stop_id' => 158, 'sequence' => 13],
            ['route_id' => 1, 'stop_id' => 85, 'sequence' => 14],

            ['route_id' => 9, 'stop_id' => 85, 'sequence' => 1],
            ['route_id' => 9, 'stop_id' => 158, 'sequence' => 2],
            ['route_id' => 9, 'stop_id' => 159, 'sequence' => 3],
            ['route_id' => 9, 'stop_id' => 33, 'sequence' => 4],
            ['route_id' => 9, 'stop_id' => 53, 'sequence' => 5],
            ['route_id' => 9, 'stop_id' => 114, 'sequence' => 6],
            ['route_id' => 9, 'stop_id' => 42, 'sequence' => 7],
            ['route_id' => 9, 'stop_id' => 160, 'sequence' => 8],
            ['route_id' => 9, 'stop_id' => 147, 'sequence' => 9],
            ['route_id' => 9, 'stop_id' => 49, 'sequence' => 10],
            ['route_id' => 9, 'stop_id' => 161, 'sequence' => 11],
            ['route_id' => 9, 'stop_id' => 162, 'sequence' => 12],
            ['route_id' => 9, 'stop_id' => 163, 'sequence' => 13],
            ['route_id' => 9, 'stop_id' => 164, 'sequence' => 14],
            ['route_id' => 9, 'stop_id' => 93, 'sequence' => 15],
        ]);
    }
}
