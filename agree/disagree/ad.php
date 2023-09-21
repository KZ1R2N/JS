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
$rev_id = "243";
$user_id = "R2N";
session_start();

// Retrieve the user_id, rev_id, and results from the database
$sql = "SELECT user_id, rev_id, result FROM ad WHERE rev_id = $rev_id AND user_id = '$user_id'";
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
$_SESSION['rev'] = $resultt;
$_SESSION['user'] = $resultt;
$_SESSION['res'] = $resultt;




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

  <script>
document.getElementById("submit-button").style.display = "none";
let resultt = document.getElementById('result').value;
// Get the agree and disagree buttons
const agreeButton = document.querySelector('.button.agree');
const disagreeButton = document.querySelector('.button.disagree');

// Set the initial boolean values for the agree and disagree buttons
let agree = false;
let disagree = false;
if(resultt === "agree")
{
    // Set the agree boolean value to true
    agree = !agree;

// Set the disagree boolean value to false
disagree = false;

// Update the CSS classes of the agree and disagree buttons
agreeButton.classList.toggle('agree');
agreeButton.classList.remove('disagree');

disagreeButton.classList.remove('disagree');
disagreeButton.classList.remove('agree');


}
else if(resultt === "disagree")
{
      // Set the disagree boolean value to true
  disagree = !disagree;

// Set the agree boolean value to false
agree = false;

// Update the CSS classes of the agree and disagree buttons
disagreeButton.classList.toggle('disagree');
disagreeButton.classList.remove('agree');

agreeButton.classList.remove('agree');
agreeButton.classList.remove('disagree');
}

// Add event listeners to the agree and disagree buttons
agreeButton.addEventListener('click', () => {
  // Set the agree boolean value to true
  agree = !agree;

  // Set the disagree boolean value to false
  disagree = false;

  // Update the CSS classes of the agree and disagree buttons
  agreeButton.classList.toggle('agree');
  agreeButton.classList.remove('disagree');

  disagreeButton.classList.remove('disagree');
  disagreeButton.classList.remove('agree');

  result(agree, disagree);
  const xhr = new XMLHttpRequest();

xhr.open("GET", "insertad.php");

xhr.onload = function() {
  if (xhr.status == 200) {
    // The PHP file was executed successfully.
    const responseText = xhr.responseText;
    // Do something with the response text.
  } else {
    // The PHP file was not executed successfully.
    console.log("The PHP file was not executed successfully.");
  }
}
});

disagreeButton.addEventListener('click', () => {
  // Set the disagree boolean value to true
  disagree = !disagree;

  // Set the agree boolean value to false
  agree = false;

  // Update the CSS classes of the agree and disagree buttons
  disagreeButton.classList.toggle('disagree');
  disagreeButton.classList.remove('agree');

  agreeButton.classList.remove('agree');
  agreeButton.classList.remove('disagree');

  result(agree, disagree);
  const xhr = new XMLHttpRequest();

xhr.open("GET", "deleteForker.php");

xhr.onload = function() {
  if (xhr.status == 200) {
    // The PHP file was executed successfully.
    const responseText = xhr.responseText;
    // Do something with the response text.
  } else {
    // The PHP file was not executed successfully.
    console.log("The PHP file was not executed successfully.");
  }
}
});

function result(agree, disagree) {
  const result = agree ? "agree" : (disagree ? "disagree" : "none");

  document.getElementById('results').value = result;

    document.getElementById("submit-button").click();

}

  </script>
</body>
</html>

