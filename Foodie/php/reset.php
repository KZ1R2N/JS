<?php
require_once('database.php');


// Check if OTP is submitted
if(isset($_POST["otp"])) {
    $user_otp = $_POST["otp"];
    
    // Check if OTP matches
    if($user_otp == $_SESSION["otp"]) {
        // OTP matched, show password reset form
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Reset Password</title>
        </head>
        <body>
        <div class="password-container">
            <h1>Reset Password</h1>
            <form method="post" action="newpass.php">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" class="password-input" required><br>
                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="password-input" required><br>
                <input type="submit" value="Reset Password" class="reset-button">
            </form>
            </div>
        </body>
        </html>
        ';
        exit; // Exit to prevent further execution
    } else {
        echo "Invalid OTP. Please try again.";
    }
    if($user_otp == $_SESSION["otp"]) {
        echo "OTP matched! Password reset successful.";
        // Perform password reset here
    } else {
        echo "Invalid OTP. Please try again.";
    }
}
?>
   <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .password-container {
            text-align: center;
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .password-input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }

        .reset-button {
            padding: 12px 24px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .otp-container {
            text-align: center;
        }

        .otp-input {
            padding: 10px;
            margin: 10px;
            font-size: 16px;
        }

        .submit-btn {
            padding: 12px 24px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="otp-container">
        <h1>Verify OTP</h1>
        <form method="post" action="">
            <input type="text" class="otp-input" id="otp" name="otp" required placeholder="Enter OTP">
            <br>
            <input type="submit" class="submit-btn" value="Verify">
        </form>
    </div>
</body>
</html>
