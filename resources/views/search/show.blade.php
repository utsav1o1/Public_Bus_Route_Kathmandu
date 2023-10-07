<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation API</title>
    <script src="https://cdn.maptiler.com/maplibre-gl-js/v1.13.0-rc.4/mapbox-gl.js"></script>
    <link href="https://cdn.skypack.dev/maplibre-gl/dist/maplibre-gl.css" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
   
    <div id="map" style="position: absolute; top: 0; bottom: 0; width: 100%;">
      
    </div>
    <script src="https://www.unpkg.com/@klltech/baato-js-client@1.2.0/dist/bundle.js"></script>
    <script>
        var currentLocationlat = {{ $currentLocationlat }};
        var currentLocationlon = {{ $currentLocationlon }};
        var currentlat = {{ $currentlat }};
        var currentlon = {{ $currentlon }};
        var destinationlat = {{ $destinationlat }};
        var destinationlon = {{ $destinationlon }};

        // Format the points in the desired format
        var points = [
            currentLocationlat + ',' + currentLocationlon,
            currentlat + ',' + currentlon
        ];

        // Create the addPoints array in the desired structure
        var addPointsArray = [points[0],points[1]];
        var map = new mapboxgl.Map({
            container: "map",
            style: "https://api.baato.io/api/v1/styles/breeze?key=bpk.qU8NXHknh6MaCGzQ0d462oUs1h2QhDpK220jytjfFbVQ", // Baato stylesheet location
            center: [currentLocationlon, currentLocationlat], // starting position [lng, lat]
            zoom: 16, // starting zoom
        });
console.log(addPointsArray);
        map.on("load", function() {
            new Baato.Routing({
                    key: "bpk.qU8NXHknh6MaCGzQ0d462oUs1h2QhDpK220jytjfFbVQ",
                })
                .addPoints(addPointsArray) // points for which routing is to be done
                .setVehicle("foot") // means of transporation
                .getBest()
                .doRequest()
                .then((response) => {
                    response.forEach((item) => {
                        map.addSource("route", {
                            type: "geojson",
                            data: {
                                type: "Feature",
                                properties: {},
                                geometry: {
                                    type: "LineString",
                                    coordinates: item.geojson.coordinates,
                                },
                            },
                        });
                        map.addLayer({
                            id: "route",
                            type: "line",
                            source: "route",
                            layout: {
                                "line-join": "round",
                                "line-cap": "round",
                            },
                            paint: {
                                "line-color": "#008148",
                                "line-width": 8,
                            },
                        });
                    });
                });
        });
    </script>
</body>

</html>
