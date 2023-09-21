<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Finder</title>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Leaflet-Geocoder CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.css" />
    <style>
        /* Style the map container */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Create a map container with id 'map' -->
    <div id="map"></div>

    <!-- Add an input field for location search -->

    <!-- Add a form to collect the location data -->
    <form action="ind1.php" method="POST">
        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude">

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude">

        <label for="locationName">Location name:</label>
        <input type="text" name="locationName" id="locationName">

        <input type="submit" value="submit" id="submit-button">
    </form>
    <button class="save-location">Save Location</button>  

    <!-- Include Leaflet and Leaflet-Geocoder libraries -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script>

    <!-- Include the JavaScript code for the map and location storage -->
    <script src="jQuery.js"></script>
    <script src="ind2.js"></script>
    <?php
    if (isset($_POST["latitude"])) {
        // echo "<p>Hello, {$_POST["latitude"]}!</p>";
        $lat = $_POST["latitude"];
      }
      
      if (isset($_POST["longitude"])) {
        // echo "<p>Your email address is: {$_POST["longitude"]}</p>";
        $lon = $_POST["longitude"];

      }
      if (isset($_POST["locationName"])) {
        // echo "<p>Your email address is: {$_POST["locationName"]}</p>";
        $locationName = $_POST['locationName'];

        // Trim and sanitize the location name
        // $locationName = trim($locationName);
        // $locationName = htmlspecialchars($locationName);
        // echo "<p>Your email address is: $locationName </p>";

      }
//     $lat = $_POST["latitude"];
// $lon = $_POST["longitude"];
// $locationName = $_POST['locationName'];

if (isset($_POST["latitude"]))
{
    $db = new PDO('mysql:host=localhost;dbname=location', 'root', '');

// Get the latitude, longitude, and location name from the form


// Prepare the SQL statement
$sql = 'INSERT INTO locations (latitude, longitude, location_name) VALUES (:latitude, :longitude, :location_name)';

// Bind the values to the SQL statement
$stmt = $db->prepare($sql);
$stmt->bindParam(':latitude', $lat);
$stmt->bindParam(':longitude', $lon);
$stmt->bindParam(':location_name', $locationName);

// Execute the SQL statement
$stmt->execute();

// Close the database connection
$db = null;
}

// Redirect the user to the success page
// header('Location: success.php');




//     ?>

