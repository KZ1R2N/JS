<?php
require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../css/reg-log.css">
</head>

<body>
    <section class="overlay">
        <section id="title">
            <div class="container-fluid">
                <h1>Foodie</h1>
            </div>
        </section>

        <section class="mt-2">
            <!--PHP code-->
            <div>
                <?php
                if (isset($_POST["submit"])) {
                    $email = $_POST["email"];

                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $address = $_POST["address"];
                    $contact = $_POST["contact"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $cpassword = $_POST["cpassword"];
                    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

                    $sql_s = "SELECT * FROM registration WHERE email='$email'";
                    $search = mysqli_query($connect, $sql_s);
                    $row = mysqli_num_rows($search);

                    $sql_us = "SELECT username FROM registration WHERE username='$username'" ;
                    $value = mysqli_query($connect, $sql_us);
                    $row_us = mysqli_num_rows($value);

                    $errors = array();

                    if (empty($email) or empty($firstname) or empty($lastname) or empty($address) or empty($contact) or empty($password)) {
                        array_push($errors, "All fields are required");
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not valid");
                    }
                    if ($row > 0) {
                        array_push($errors, "Email already exists");
                    }
                    if ($row_us > 0) {
                        array_push($errors, "Username already exists");
                    }
                    if (preg_match("/^(01[0-9]{9})$/", $contact) !== 1) {
                        array_push($errors, "Wrong Phone Number");
                    }
                    if (strlen($password) < 8) {
                        array_push($errors, "Password must be atleast 8 characters long");
                    }
                    if ($password !== $cpassword) {
                        array_push($errors, "Password does not match");
                    }

                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger' style='padding-left:40%; margin:5px 10px ; border-radius:0'>$error</div>";
                        }
                    } else {
                        $sql = "INSERT INTO registration(email, username, firstname, lastname, address , contact, password ) VALUES (?,?,?,?,?,?,?)";
                        $stmtinsert = $connect->prepare($sql);
                        if ($stmtinsert) {
                            $result = $stmtinsert->execute([$email, $username, $firstname, $lastname, $address,  $contact, $pass]);
                            if ($result) {
                                $_SESSION['register'] = "registered";
                                header("Location: login.php");
                            } else {
                                echo "<div class='alert alert-danger' style='padding-left:40%; margin:5px 10px ; border-radius:0'>An error Occured</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger' style='padding-left:40%; margin:5px 10px ; border-radius:0'>An error Occured</div>";
                        }
                    }
                }
                ?>
            </div>
            <!--Form Structure-->
            <div class="d-flex">
                <div class="center">
                    <!--Form Title-->
                    <h2>Create Account</h2>
                    <!--Form-->
                    <form action="registration.php" method="post">
                        <div class="txt_field">
                            <input type="text" name="email" required>
                            <span></span>
                            <label for="email">Email</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="firstname" required>
                            <span></span>
                            <label for="firstname">First Name</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="lastname" required>
                            <span></span>
                            <label for="lastname">Last Name</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="address" required>
                            <span></span>
                            <label for="address">Address</label>
                        </div>
                        <div class="txt_field">
                            <input type="tel" name="contact" required>
                            <span></span>
                            <label for="contact">Phone Number</label>
                        </div>
                        <div class="txt_field">
                            <input id="username" type="text" name="username" oninput="getValue()" required>
                            <span></span>
                            <label for="username">User Name</label>
                            <br>
                            <small id="result"></small>
                        </div>

                        <div class="txt_field">
                            <input type="password" name="password" required>
                            <span></span>
                            <label for="password">Password</label>
                        </div>
                        <div class="txt_field">
                            <input type="password" name="cpassword" required>
                            <span></span>
                            <label for="cpassword">Password Confirmation</label>
                        </div>
                        <!--Submit Button-->
                        <div class="m-auto text-center"><input class="btn button" type="submit" name="submit" value="Register"></div>
                        <div class="signup_link">
                            Already have an account? <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
    <?php
    $sql_us = "SELECT username FROM registration";
    $value = mysqli_query($connect, $sql_us);
    $array = array();
    while ($res = mysqli_fetch_assoc($value)) {
        $array[] = $res['username'];
    }

    ?>
    <script>
        var user = <?php echo json_encode($array); ?>;
        let fLen = user.length;


        function getValue() {
            let username = document.getElementById('username');
            let val = username.value;

            if (user.includes(val)) {
                add = document.getElementById('result');
                result.innerHTML = "username is already in use";
            } else {
                add = document.getElementById('v');
                result.innerHTML = " ";
            }

        }
    </script>
</body>

</html>