<?php
include "connect.php";
include "signup.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $url__address = strtolower($username) . "." . strtolower($username);
    $signup = new Signup();
    $user__id = $signup->create__userid();

    $query = "INSERT INTO users (user__id,email,fullname,username,password,url__address) VALUES 
        ('$user__id','$email','$fullname','$username','$password','$url__address')";
    $connect = new Database();
    $connect->save($query);

    if ($connect) {
        echo "<script type=\"text/javascript\">" .
            "alert('Your registration was succesfully'); 
        location.href = 'login.php';" .
            "</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scope</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/media.css" />
    <link rel="icon" href="assets/img/icon.ico" />
</head>

<body>
    <main>
        <div class="register__container">
            <div class="register">
                <img src="assets/img/scope-logo.png" class="logo" />
                <div class="register__form">
                    <form class="form__register" action="" method="post">
                        <input class="input__sign" type="text" name="email" id="email" placeholder="Email" required />
                        <input class="input__sign" type="text" name="fullname" id="fullname" placeholder="Full name" required />
                        <input class="input__sign" type="text" name="username" id="username" placeholder="Username" required />
                        <input class="input__sign" type="password" name="password" id="password" placeholder="Password" required />
                        <button class="register__button" type="submit" name="register__button" id="register__button">Register</button>
                    </form>
                </div>

                <div class="register__policy">By registering, you agree to our Terms , Data Policy and Cookie Policy .</div>
            </div>

            <div class="signin">
                <span>Have an account?</span><a href="login.php">Sign in</a>
            </div>
        </div>

        <div class="phones__container">
            <img src="assets/img/phones.png" />
        </div>
    </main>
    <footer>
        <span class="copyright">&copy; Copyright Scope 2021</span>
    </footer>
</body>

</html>