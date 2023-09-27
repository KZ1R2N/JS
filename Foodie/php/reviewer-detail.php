<?php
require_once('database2.php');
if (isset($_GET['id'])) {
    $input = $_GET['id'];
    $id = (base64_decode($input) / 123456789);
    $sql = "SELECT * FROM registration where id='$id'";
    $result = mysqli_query($connect, $sql);
    $values = mysqli_fetch_assoc($result);
  
}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "foodies";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$sql = "SELECT reviewers, forker FROM forkers";
$result = $connect->query($sql);
$key = $value['id'];   //reviewers
$value = $user_value['id'];  //forker
// session_start();
$_SESSION['k'] = $key;
$_SESSION['v'] = $value;

$found = false;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['reviewers'] == $key && $row['forker'] == $value) {
            $found = true;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/d4c58442e3.js" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../css/reviewer.css">
</head>

<body>
    <!--Header-->

    <section class="colored-section">
        <!--Navigation-->
        <?php
        require('Navigation.php');
        ?>
        </div>
    </section>
    <meta name="name" content="<?php echo $found; ?>">
    <section id="account">
        <div class="reviewer">
            <img class="img" src="../image/face.jpg" alt="">
            <div class="ms-3">
                <h4 class="mb-0"><?= $values['firstname']." "; ?><?= $values['lastname']; ?></h4>
                <p class="text-secondary mb-1">@username1234</p>
            </div>
            <div>
                <button class="fork">Fork</button>
                    <td><label class = "forkk"><img id = 'ff' src="../image/fork.png" alt="" class = "fork"></label></td>

            </div>
            <div class="social">
                <p style="display: inline-block;">Follow on: </p>
                <a href="<?= $values['youtube']; ?>"><img src="../image/youtube.png" alt=""></a>
                <a href="<?= $values['instagram']; ?>"><img src="../image/facebook.png" alt=""></a>
                <a href="<?= $values['facebook']; ?>"><img src="../image/instagram.png" alt=""></a>
                <a href="<?= $values['www.twitt']; ?>"><img src="../image/twitter.png" alt=""></a>
            </div>
        </div>
    </section>
    <section>
        <h3 class="text-center">Reviewed Food Items</h3>
        <div>
            <section id="Collection">

                <div class="col col-9 d-flex flex-wrap justify-content-between box m-auto">
                    <div class="card m-3">
                        <a href="">
                            <img src="../image/a.jpg" class="card-img-top" height="200" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Food Name</h5>
                            <div class=" text-start">
                                <p class="mb-0">Restaurant Name</p>
                                <small class="text-secondary">Price: Tk. __ </small><br>
                                <small class="text-secondary">Rated: </small>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <p class="mt-2 text"><small>Review: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Habitasse platea dictumst quisque sagittis purus sit. Laoreet id donec ultrices tincidunt arcu non sodales neque sodales. Faucibus in ornare quam viverra orci sagittis eu volutpat odio.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card m-3">
                        <a href="">
                            <img src="../image/e.jpg" class="card-img-top" height="200" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Food Name</h5>
                            <div class=" text-start">
                                <p class="mb-0">Restaurant Name</p>
                                <small class="text-secondary">Price: Tk. __ </small><br>
                                <small class="text-secondary">Rated: </small>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <p class="mt-2 text"><small>Review: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Habitasse platea dictumst quisque sagittis purus sit. Laoreet id donec ultrices tincidunt arcu non sodales neque sodales. Faucibus in ornare quam viverra orci sagittis eu volutpat odio.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card m-3">
                        <a href="">
                            <img src="../image/k.jpg" class="card-img-top" height="200" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Food Name</h5>
                            <div class=" text-start">
                                <p class="mb-0">Restaurant Name</p>
                                <small class="text-secondary">Price: Tk. __ </small><br>
                                <small class="text-secondary">Rated: </small>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <p class="mt-2 text"><small>Review: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Habitasse platea dictumst quisque sagittis purus sit. Laoreet id donec ultrices tincidunt arcu non sodales neque sodales. Faucibus in ornare quam viverra orci sagittis eu volutpat odio.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!--Footer-->

    <section class="white-section" id="footer">
        <?php
        require('footer.php');
 
        ?>
    </section>
</body>

</html>
<script src="jQuery.js"></script>
<script src="fork.js">

</script>