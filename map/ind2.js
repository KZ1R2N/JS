document.getElementById("submit-button").style.display = "none";
// Initialize the map
let latlng = 0; // Get the coordinates of the found location
let locationName = "";
var map = L.map('map').setView([0, 0], 2);

// Add a tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Add a search control to the map
var searchControl = L.Control.geocoder().addTo(map);

// Handle the search result
searchControl.on('markgeocode', function(e) {
     latlng = e.geocode.center; // Get the coordinates of the found location
     locationName = e.geocode.name;

    // Create a marker on the map
    L.marker(latlng).addTo(map)
        .bindPopup(locationName)
        .openPopup();
                console.log('Latitude:', latlng.lat);
console.log('Longitude:', latlng.lng);
console.log('Location Name:', locationName);
document.getElementById('latitude').value = latlng.lat;
document.getElementById('longitude').value = latlng.lng;
document.getElementById('locationName').value = locationName;

        // function sendData(){




            // document.getElementById('latitude').value = latlng.lat;
            // document.getElementById('longitude').value = latlng.lng;
            // document.getElementById('locationName').value = latlng.locationName;

// }
        // document.getElementById("submit-button").click();


            
     


        });
        document.querySelector('.save-location').addEventListener('click',()=>{
                    document.getElementById('latitude').value = latlng.lat;
            document.getElementById('longitude').value = latlng.lng;
            document.getElementById('locationName').value = locationName;
        document.getElementById("submit-button").click();
     
});