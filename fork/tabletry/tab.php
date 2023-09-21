<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "tabletry");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the first table
$sql = "SELECT * FROM first_table";
$result = $conn->query($sql);

// Display data in an HTML table
if ($result->num_rows > 0) {
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["column1"] . "</td>";
        echo "<td>" . $row["column2"] . "</td>";
        echo "<td><button id='approve-button-". $row["id"] ."' onclick='approve(" . $row["id"] . ")'>Approve</button></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
 <!DOCTYPE html>
<head>
    <title>"FORKdemo"
    </title>
    <body>


</body>
</head>
<script src="tab.js"></script>