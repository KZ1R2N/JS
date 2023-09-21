<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agreedisagree";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Assuming you have received the values from a POST request
session_start();   
$rev_id = $_SESSION['rev'];
$user_id = $_SESSION['user'];
$resultt = $_SESSION['res'];

// Check if the row for this combination already exists
$sql = "SELECT * FROM ad WHERE rev_id = $rev_id AND user_id = '$user_id'";
$result = $conn->query($sql);

if ($resultt->num_rows > 0) {
  // If the row exists, perform an update or delete
  if ($resultt === "none") {
    // Delete the row
    $sql = "DELETE FROM ad WHERE rev_id = $rev_id AND user_id = '$user_id'";
  } else {
    // Update the row
    $sql = "UPDATE ad SET result = '$resultt' WHERE rev_id = $rev_id AND user_id = '$user_id'";
  }
} else {
  // If the row doesn't exist, perform an insert
  $sql = "INSERT INTO ad (rev_id, user_id, result) VALUES ($rev_id, '$user_id', '$result')";
}

if ($conn->query($sql) === TRUE) {
  echo "Record updated/inserted/deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
