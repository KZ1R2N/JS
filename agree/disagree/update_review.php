<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agreedisagree";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);

$rev_id = $data['rev_id'];
$user_id = $data['user_id'];
$result = $data['result'];

$sql = "UPDATE reviews SET result='$result' WHERE rev_id=$rev_id AND user_id='$user_id'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

$conn->close();
?>
