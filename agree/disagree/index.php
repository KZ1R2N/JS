<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agreedisagree";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ad";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="row">';
        echo '<div class="col">' . $row["rev_id"] . '</div>';
        echo '<div class="col">' . $row["user_id"] . '</div>';
        echo '<div class="col">';
        if ($row["result"] == 'agree') {
            echo '<button class="agree" data-rev_id="' . $row["rev_id"] . '" data-user_id="' . $row["user_id"] . '" data-vote="agree">Agree</button>';
            echo '<button class="disagree" data-rev_id="' . $row["rev_id"] . '" data-user_id="' . $row["user_id"] . '" data-vote="disagree">Disagree</button>';
            echo '<button class="delete" data-rev_id="' . $row["rev_id"] . '" data-user_id="' . $row["user_id"] . '">Delete</button>';
        } elseif ($row["result"] == 'disagree') {
            echo '<button class="agree" data-rev_id="' . $row["rev_id"] . '" data-user_id="' . $row["user_id"] . '" data-vote="agree">Agree</button>';
            echo '<button class="disagree" data-rev_id="' . $row["rev_id"] . '" data-user_id="' . $row["user_id"] . '" data-vote="disagree">Disagree</button>';
            echo '<button class="delete" data-rev_id="' . $row["rev_id"] . '" data-user_id="' . $row["user_id"] . '">Delete</button>';
        } else {
            echo '<button class="vote" data-rev_id="' . $row["rev_id"] . '" data-user_id="' . $row["user_id"] . '">Vote</button>';
        }
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agree/Disagree Buttons</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="reviews">
        <?php include 'index.php'; ?>
    </div>
    <script src="index.js"></script>
    <style>
  body {
    font-family: Arial, sans-serif;
}

.row {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.col {
    flex: 1;
}

button {
    width: 100px;
    height: 30px;
    font-size: 12px;
    cursor: pointer;
}

.agree {
    background-color: #00cc00;
    border: none;
}

.disagree {
    background-color: #cc0000;
    border: none;
    color: white;
}

.no-vote {
    background-color: #cccccc;
    border: none;
    color: white;
}
</style>
</body>
</html>
