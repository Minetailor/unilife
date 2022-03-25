<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$uername = mysqli_real_escape_string($con, $unsafe_username);  //prevent injection
    //$password = mysqli_real_escape_string($con, $unsafe_password);  //prevent injection
    $password = password_hash($password, PASSWORD_DEFAULT);
    $is_admin = 0;
    $score = 0;

    if(!empty($username) && !empty($password)){
        //save data to database
        $query = "insert into user (email, username, password, is_admin, score) values ('$email', '$username', '$password', '$is_admin', '$score')";
        mysqli_query($con, $query);
        header("Location:login.php");

    }
    else{
        echo "Username and password are required";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register page</title>
    <link rel="shortcut icon" type="image/png" href="resources/imgs/icon.png"/>
    <link rel="stylesheet" type="text/css" href="website_style.css">
</head>
<body>
<script>
    function showPassword() {
        let a = document.getElementById("user_password");
        if (a.type === "password") {
            a.type = "text";
        }
        else {
            a.type = "password";
        }
    }
</script>
<div id="login_block">
    <form action="register.php" method="post">
        <p><label for="Email"></label><input type="email" id="Email" placeholder="Email" class="text_block" name = "email" required></p>
        <p><label for="Username"></label><input type="text" id="Username" placeholder="Username" class="text_block" name = "username" required></p>
        <p><label for="Password"></label><input type="password" id="user_password" placeholder="Password" class="text_block" name = "password" required></p>
        <h2 class="login-title">
            <p><label>
                    <input type="checkbox" onclick="showPassword()">
                </label>Show Password</p>
            <span>Already have an account?</span><a href="login.php">Sign in</a>
        </h2>
        <div id="login">
            <button type="submit" id="login_btn" name="register_btn">Sign up</button>
        </div>
    </form>
</div>
</body>
</html>

