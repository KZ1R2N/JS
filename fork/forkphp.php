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

$sql = "SELECT reviewers, forker FROM forkers";
$result = $conn->query($sql);
$key = 'omar';
$value = 'rahin';

$found = false;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row['reviewers'] == $key && $row['forker'] == $value) {
            $found = true;
            break;
        

    }
}
}

// if($value1 === 'in')
// {
//     insertUser();
// }
// else if ($value1 === 'out')
// {
//     deleteUser();
// }
// function deleteUser()
// {
//     echo $key;
//     $query = "DELETE FROM forks WHERE reviewers = '{$key}' AND forker = '{$value}'";
//     $result1 = $conn->query($query);
// }
// function insertUser()
// {
//     $query="INSERT INTO forkers (reviewers, forker) VALUES ('{$key}', '{$value}')";
//     $result1 = $conn->query($query);
// }
// //echo $found;
// //header('Content-Type: application/json');
// $jsonArray = json_encode($data);
//echo $jsonArray;

?>
<!DOCTYPE html>
<head>
    <title>"FORKdemo"
    </title>
    <body >
        <table cellspacing = "10">
         <tr>
             <td><button class="forkb">Fork</button>  </td>
             <td><label class = "forkk"><img id = 'ff' src="fork.png" alt="" class = "fork"></label></td>
            
         </tr>

        </table>
       <meta name="name" content = "<?php echo $found;?>">
    </body>
</head>
<style>
    .fork{
        height: 20px;
       
    }
    .user{
        padding: 10px 25px;
        border-radius: 50px;
        cursor: pointer;
        
        background-color: pink;
        
    }
    .imgg{
        height: 20px;
    }

    .forkb{
        padding: 10px 25px;
        border-radius: 50px;
        cursor: pointer;
        font-style: italic;
        background-color: #ae0046 ;
        color: aliceblue;
        font-weight: bold;
    }
    .forkb:hover{
      background-color: rgb(173, 85, 85);
      color: white;
    }
    .forked{
      font-weight: bold;
      background-color: #ae0046 ;
      color: aliceblue;     
      font-style: italic;
      cursor: pointer;
    }
</style>
<script src="jQuery.js"></script>
<script src="fork.js">

</script>