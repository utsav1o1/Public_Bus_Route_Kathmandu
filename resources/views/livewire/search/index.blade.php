
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <label for="currentLocation">Current Location</label>
            <div class="input-group">
                <input type="text" id="currentLocation" oninput="searchCurrentLocation(this.value)" class="form-control" placeholder="Enter current location..." />
            </div>
            <select  id="currentLocationSelect" class="form-control mt-2" autocomplete="nope" onchange="updateInputField('currentLocationSelect', 'currentLocation','currentPlaceId')">
                <option value="Atom">Suggestions: </option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="destinationLocation">Destination Location</label>
            <div class="input-group">
                <input type="text"  id="destinationLocation" oninput="searchDestinationLocation(this.value)" class="form-control" placeholder="Enter destination location..." />
            </div>
            <select  id="destinationLocationSelect" class="form-control mt-2" autocomplete="nope" onchange="updateInputField('destinationLocationSelect', 'destinationLocation','destinationPlaceId')">
                <option value="Atom">Suggestions: </option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
           
                <button class="btn btn-primary" onclick="storeAndRedirect()">Find</button>
           
        </div>
    </div>

    <input type="text" id="currentPlaceId" hidden >
    <input type="text" id="destinationPlaceId" hidden >

</div>
<script src="https://www.unpkg.com/@klltech/baato-js-client@1.2.0/dist/bundle.js"></script>
<script>

    function searchCurrentLocation(query) {
        var query = document.getElementById("currentLocation").value;
        searchLocation(query, "currentLocationSelect");
    }

    function searchDestinationLocation(query) {
        var query = document.getElementById("destinationLocation").value;
        searchLocation(query, "destinationLocationSelect");
    }


    function searchLocation(query, selectId) {
        const search = new Baato.Search()
            .setBaseUrl(`https://api.baato.io/api`)
            .setKey("bpk.qU8NXHknh6MaCGzQ0d462oUs1h2QhDpK220jytjfFbVQ")
            .setQuery(query)
            .setLimit(5)
            .doRequest()
            .then((res) => {
                var select = document.getElementById(selectId);
                var length = select.options.length;
                for (i = length - 1; i >= 0; i--) {
                    select.options[i] = null;
                }
                for (var i in res.data) {
                    select.add(new Option(res.data[i].name, res.data[i].placeId));
                }
                document.getElementById(selectId).size = 5;
            });
    }

 
    function updateInputField(selectId, inputId,placeId) {
        var select = document.getElementById(selectId);
        var input = document.getElementById(inputId);
        var place = document.getElementById(placeId);
        var selectedOption = select.options[select.selectedIndex];
        
        input.value = selectedOption.text;
       place.value = selectedOption.value;
        
    }

    function storeAndRedirect() {
        // Get the input field values
        var currentLocationValue = document.getElementById("currentPlaceId").value;
        var destinationLocationValue = document.getElementById("destinationPlaceId").value;
   
     
    var url = '{{ route('search.show', ['currentLocation' => ':currentLocation', 'destinationLocation' => ':destinationLocation']) }}';
    url = url.replace(':currentLocation', encodeURIComponent(currentLocationValue));
    url = url.replace(':destinationLocation', encodeURIComponent(destinationLocationValue));

    // Redirect to the constructed URL
    window.location.href = url;
      
    }
</script>
