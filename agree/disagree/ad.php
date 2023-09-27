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
      background-color: #046c4e;
      border: 2px dotted #ccc;
      border-radius: 10px;
      cursor: pointer;
      margin: 10px;
      color: white;
      font-weight: bold;
      
    }

    .button.agree {
      background-color: #3b82f6;
      background-color: #1f60e0;
      color: white;
      font-weight: bold;
      padding-top: 2px;
     padding-bottom: 2px;
     padding-left: 4px;
    padding-right: 4px;
     border: 1px solid;
     border-color: #1f60e0;
     border-radius: 10px;

    }

    .button.disagree {

      background-color: #a81b1b;
      color: white;
      font-weight: bold;
      padding-top: 2px;
     padding-bottom: 2px;
     padding-left: 4px;
    padding-right: 4px;
     border: 1px solid;
     border-color: #1f60e0;
     border-radius: 10px;

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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agreedisagree";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM ad ";
$result = $conn->query($sql);

// Display data in an HTML table
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
  echo $row["rev_id"];

  echo '<button class="button agree-">Agree</button>';
  echo '<button class="button disagree-"'. $row["rev_id"] .'>Disagree</button>';
 echo '<input type="hidden" id="rev" value="' . $row["rev_id"] . '">';

  
  echo '<script src = "ad.js"></script>';
}
}
?>


</body>
</html>

