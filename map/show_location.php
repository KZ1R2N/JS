<?php

$db = new PDO('mysql:host=localhost;dbname=location', 'root', '');

$sql = 'SELECT * FROM locations';
$stmt = $db->prepare($sql);
$stmt->execute();

$locations = $stmt->fetchAll();

$db = null;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Locations</title>
</head>
<body>
    <h1>Show Locations</h1>

    <table border="1">
        <thead>
            <tr>
                <td>Latitude</td>
                <td>Longitude</td>
                <td>Location Name</td>
                <td>Map</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locations as $index => $location) : ?>
                <tr>
                    <td><?php echo $location['latitude']; ?></td>
                    <td><?php echo $location['longitude']; ?></td>
                    <td><?php echo $location['location_name']; ?></td>
                    <td><div id="map-<?php echo $index; ?>"></div></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>

    <script>
        <?php foreach ($locations as $index => $location) : ?>
            var map-<?php echo $index; ?> = L.map('map-<?php echo $index; ?>').setView([<?php echo $location['latitude']; ?>, <?php echo $location['longitude']; ?>], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map-<?php echo $index; ?>);

            L.marker([<?php echo $location['latitude']; ?>, <?php echo $location['longitude']; ?>]).addTo(map-<?php echo $index; ?>);
        <?php endforeach; ?>
    </script>
</body>
</html>
