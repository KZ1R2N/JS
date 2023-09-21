
<!DOCTYPE html>
<head>
    <title>"FORKdemo"
    </title>
    <body >
    <form action="azax.php" method="POST">
    <input type="text" name="name" value="" id="name-field" />
    <input type="email" name="email" value="" id="email-field" />
    <input type="submit" value="Submit" id="submit-button" />
</form>
    <button onClick="sendData()">Send Data</button>        
    </body>
</head>

<script src="jQuery.js"></script>
<script src="azax.js"></script>



<?php
//👇 output response with php
if (isset($_POST["name"])) {
    echo "<p>Hello, {$_POST["name"]}!</p>";
  }
  
  if (isset($_POST["email"])) {
    echo "<p>Your email address is: {$_POST["email"]}</p>";
  }



?>