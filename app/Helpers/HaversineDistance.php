<?php

namespace App\Helpers;

class HaversineDistance{

    public static function shortestDistance($lat1, $lon1, $lat2, $lon2) 
    {
            // Radius of the Earth in kilometers
            $earthRadius = 6371;
        
            // Convert latitude and longitude from degrees to radians
            $lat1 = deg2rad($lat1);
            $lon1 = deg2rad($lon1);
            $lat2 = deg2rad($lat2);
            $lon2 = deg2rad($lon2);
        
            // Haversine formula
            $dlat = $lat2 - $lat1;
            $dlon = $lon2 - $lon1;
            $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
            $distance = $earthRadius * $c;
        
            return $distance;
        }
   



}