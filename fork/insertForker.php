    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodies";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // $jsondata = $_POST['jsonvalue'];
    // $value1 = json_decode($jsondata);
    // Get the value from the JavaScript code.
    //$value1 = $_POST["value"];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $key = 'omar';
    $value = 'rahin';
    $query="INSERT INTO forkers (reviewers, forker) VALUES ('{$key}', '{$value}')";
    $result1 = $conn->query($query);

?>