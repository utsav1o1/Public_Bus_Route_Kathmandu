<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Helpers\HaversineDistance;
use App\Services\BusRouteFinder;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Search()
    {
        return view('search.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(Request $request, $currentLocation, $destinationLocation)
    {

        $responses = Http::pool(fn (Pool $pool) => [
            $pool->get('https://api.baato.io/api/v1/places', [
                'key' => env('BAATO_API_KEY'),
                'placeId' => $currentLocation,
            ]),
            $pool->get('https://api.baato.io/api/v1/places', [
                'key' => env('BAATO_API_KEY'),
                'placeId' => $destinationLocation,
            ]),
        ]);

        // Use the await method to retrieve responses
        $response1 = $responses[0];
        $response2 = $responses[1];

        // Convert response content to JSON
        $currentLocationData = json_decode($response1->body(), true);
        $destinationLocationData = json_decode($response2->body(), true);

        $nearByBusStops = Http::pool(fn (Pool $pool) => [
            $pool->get(
                'https://api.baato.io/api/v1/search/nearby',
                [
                    'type' => 'transport',
                    'lat' => $currentLocationData['data'][0]['centroid']['lat'],
                    'lon' => $currentLocationData['data'][0]['centroid']['lon'],
                    'key' => env('BAATO_API_KEY'),
                    'radius' => 0.5,
                    'limit' => 10
                ]
            ),
            $pool->get(
                'https://api.baato.io/api/v1/search/nearby',
                [
                    'type' => 'transport',
                    'lat' => $destinationLocationData['data'][0]['centroid']['lat'],
                    'lon' => $destinationLocationData['data'][0]['centroid']['lon'],
                    'key' => env('BAATO_API_KEY'),
                    'radius' => 0.5,
                    'limit' => 10
                ]
            ),
        ]);
        $currentLocNearBy = $nearByBusStops[0];
        $destinationLocNearBy = $nearByBusStops[1];

        $CurrentBusStopList = json_decode($currentLocNearBy->body(), true);
        $destinationBusStopList = json_decode($destinationLocNearBy->body(), true);


        foreach ($CurrentBusStopList['data'] as $currentBusStop) {
            $centroid = $currentBusStop['centroid'];
            $BusStoplatitude = $centroid['lat'];
            $BusStoplongitude = $centroid['lon'];

            $distance = HaversineDistance::shortestDistance($currentLocationData['data'][0]['centroid']['lat'], $currentLocationData['data'][0]['centroid']['lon'], $BusStoplatitude, $BusStoplongitude);

            $currentBusStopDistance[] = $distance;
        }

        foreach ($destinationBusStopList['data'] as $destinationBusStop) {
            $centroid = $destinationBusStop['centroid'];
            $BusStoplatitude = $centroid['lat'];
            $BusStoplongitude = $centroid['lon'];

            $distance = HaversineDistance::shortestDistance($destinationLocationData['data'][0]['centroid']['lat'], $destinationLocationData['data'][0]['centroid']['lon'], $BusStoplatitude, $BusStoplongitude);

            $distinationBusStopDistance[] = $distance;
        }
        // Find the smallest value in the array
        $currentsmallestValue = min($currentBusStopDistance);
        $destinationsmallestValue = min($distinationBusStopDistance);

        // Find the index of the smallest value
        $index1 = array_search($currentsmallestValue, $currentBusStopDistance);
        $index2 = array_search($destinationsmallestValue, $distinationBusStopDistance);


        // return view('search.show', [
        //     'currentLocationlat' => $currentLocationData['data'][0]['centroid']['lat'],
        //     'currentLocationlon' => $currentLocationData['data'][0]['centroid']['lon'],
        //     'currentlat' => $CurrentBusStopList['data'][$index1]['centroid']['lat'],
        //     'currentlon' => $CurrentBusStopList['data'][$index1]['centroid']['lon'],
        //     'destinationlat' => $destinationBusStopList['data'][$index2]['centroid']['lat'],
        //     'destinationlon' => $destinationBusStopList['data'][$index2]['centroid']['lon'],

        // ]);

        // dd($CurrentBusStopList['data'][$index1], $destinationBusStopList['data'][$index2]);
        // dd($destinationBusStopList);
        //dd($distinationBusStopDistance,$destinationLocationData['data'][0]['centroid']['lat'],$destinationLocationData['data'][0]['centroid']['lon'], $destinationBusStopList['data'][$index2], $index2);
        // $startStationName = $request->input('start_station');
        // $endStationName = $request->input('end_station');

        $routeFinder = new BusRouteFinder();
        $busRoutes = $routeFinder->findBusRoute($CurrentBusStopList['data'][$index1]['centroid'], $destinationBusStopList['data'][$index2]['centroid']);
      dd($busRoutes);
       
        // if ($busRoutes === null) {
        //     return "No valid bus routes found.";
        // }

        //  // Use the app() function to resolve an instance of the RouteFinder service
        //  $routeFinder = app(RouteFinder::class);

        //  // Call the findRoute method on the resolved RouteFinder instance
        //  $route = $routeFinder->findRoute($origin, $destination);

        // Check if a route was found
        //  if ($busRoutes) {
        //      return response()->json(['route' => $busRoutes]);
        //  } else {
        //      return response()->json(['message' => 'Route not found'], 404);
        //  }


    }
}
