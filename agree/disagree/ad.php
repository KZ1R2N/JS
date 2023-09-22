<?php
// Assuming you have a database connection established
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
$rev_id = "420";
$user_id = "Afia";


// Retrieve the user_id, rev_id, and results from the database
$sql = "SELECT user_id, rev_id, result FROM ad WHERE rev_id = '{$rev_id}' AND user_id = '{$user_id}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Get the row's result value
  $resultt = $result->fetch_assoc()['result'];
} else {
  // The row does not exist, so set the result to none
  $resultt = "none";
}

// Do whatever you need with the $resultt value
// For example, you could store it in a session variable:

if(isset($_POST['results'])) {
  $resultt = $_POST['results'];
  $sql = "SELECT * FROM ad WHERE rev_id = '{$rev_id}' AND user_id = '{$user_id}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // If the row exists, perform an update or delete
  if ($resultt === "none") {
    // Delete the row
    $sql = "DELETE FROM ad WHERE rev_id = '{$rev_id}' AND user_id = '{$user_id}'";
  } else {
    // Update the row
    $sql = "UPDATE ad SET result = '{$resultt}' WHERE rev_id = '{$rev_id}' AND user_id = '{$user_id}'";
  }
} else {
  // If the row doesn't exist, perform an insert
  $sql = "INSERT INTO ad (rev_id, user_id, result) VALUES ('{$rev_id}', '{$user_id}', '{$resultt}')";
}

if ($conn->query($sql) === TRUE) {
  //echo "Record updated/inserted/deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}



$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Agree/Disagree Button</title>
  <style>
    .button {
      width: 100px;
      height: 50px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
    }

    .button.agree {
      background-color: #008000;
      color: #fff;
    }

    .button.disagree {
      background-color: #ff0000;
      color: #fff;
    }
  </style>
</head>
<body>
<input type="hidden" id="result" value="<?php echo $resultt; ?>">
<form action="ad.php" method="POST">


        <input type="text" name="results" id="results">

        <input type="submit" value="submit" id="submit-button">
    </form>
  <h1>Agree/Disagree Button</h1>

  <button class="button agree">Agree</button>
  <button class="button disagree">Disagree</button>

  <script src = "ad.js">


  </script>
</body>
</html>

