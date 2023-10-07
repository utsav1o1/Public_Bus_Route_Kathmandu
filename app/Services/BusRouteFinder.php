<?php

namespace App\Services;

use App\Models\Route;
use App\Models\Stop;
use Illuminate\Support\Facades\DB;
use PHPUnit\Event\Code\Test;

class BusRouteFinder
{
    /**
     * Find the bus route between two nearest stations.
     *
     * @param string $startStationName
     * @param string $endStationName
     * @return array|null
     */
    public function findBusRoute(array $startStation, array $endStation)
    {


        $startStation = $this->getStationByName($startStation['lat'], $startStation['lon']);
        $endStation = $this->getStationByName($endStation['lat'], $endStation['lon']);

        if (!$startStation || !$endStation) {
            return null; // One or both stations not found.
        }

        // Find routes that include both start and end stations.
        // dd($startStation->id, $endStation->id);
        $routes = $this->getRoutesWithStations($startStation->id, $endStation->id);

        if (empty($routes)) {
            return null; // No routes found that connect both stations.
        }

        // For each route, determine the order of stations.
        $busRoutes = [];
        //  dd($routes);
        foreach ($routes as $route) {
            // dd($route);
            $stations = $this->getStationsOnRoute($route);
            // dd($stations);
            $startIndex = array_search($startStation->id, $stations);
            $endIndex = array_search($endStation->id, $stations);
            //dd($startIndex,$endIndex);
            if ($startIndex !== false && $endIndex !== false && $startIndex < $endIndex) {
                // The route connects both stations in the correct order.
                // $busRoutes[] = Route::where('id', $route)->get('name');
                $busRoutes[] = $stations;
            }
        }
        // dd($busRoutes);
        //         $test = [];
        //         $routeCoordinates= [];

        //         foreach ($busRoutes as $busRoute) {
        //             $stop = DB::table('stops')->where('id', $busRoute)->first();
        //             $test[] = $stop;

        //             if ($stop) {
        //                 $coordinates = $stop->latitude . ',' . $stop->longitude;
        //                 $routeCoordinates[] = $coordinates;
        //             }
        //         }
        // dd($routeCoordinates);

        foreach ($busRoutes[0] as $busRouteId) {
            $stop = DB::table('stops')->where('id', $busRouteId)->first();

            if ($stop) {
                $coordinates = $stop->latitude . ',' . $stop->longitude;
                $busRoutesCoordinates[] = $coordinates;
            }
        }

       


        return $busRoutesCoordinates;
    }

    /**
     * Get station details by name.
     *
     * @param string $stationName
     * @return \stdClass|null
     */
    private function getStationByName($currentLatitude, $currentLongitude)
    {
        return DB::table('stops')
            ->where('latitude', $currentLatitude)
            ->where('longitude', $currentLongitude)
            ->first();
    }

    /**
     * Get routes that include both start and end stations.
     *
     * @param int $startStationId
     * @param int $endStationId
     * @return \Illuminate\Support\Collection
     */
    private function getRoutesWithStations($startStationId, $endStationId)
    {
        return DB::table('route_stops')
            ->whereIn('stop_id', [$startStationId, $endStationId])
            ->groupBy('route_id')
            ->havingRaw('COUNT(DISTINCT stop_id) = 2')
            ->pluck('route_id');
    }

    /**
     * Get the list of stations on a route.
     *
     * @param int $routeId
     * @return array
     */
    private function getStationsOnRoute($routeId)
    {
        return DB::table('route_stops')
            ->where('route_id', $routeId)
            ->orderBy('sequence')
            ->pluck('stop_id')
            ->toArray();
    }


    private function routeCoordinates($busRoute)
    {
        return DB::table('stops')
            ->where('id', $busRoute)
            ->first();
    }
}
