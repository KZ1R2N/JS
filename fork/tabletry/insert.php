<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "tabletry");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the ID from the AJAX request
$id = $_POST['id'];

// Insert data into the second table
$sql = "INSERT INTO second_table SELECT * FROM first_table WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    $sql_delete = "DELETE FROM first_table WHERE id = $id";
    if($conn->query($sql_delete) === TRUE)
    {
        echo "Data approved and inserted successfully.";
    }

} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
