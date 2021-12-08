<?php
session_start();

include "connect.php";

$username = "";
$password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1 ";
    $connect = new Database();
    $result = $connect->read($query);

    if ($result) {
        $row = $result[0];
        if ($password == $row['password']) {
            $_SESSION['scope_user__id'] = $row['user__id'];
            echo "<script type=\"text/javascript\">" .
                "alert('Your login was succesfully'); location.href = 'page.php';" .
                "</script>";
        }
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
        <div class="login__container">
            <div class="login">
                <img src="assets/img/scope-logo.png" class="logo" />
                <div class="login__form">
                    <form class="form__login" action="" method="post">
                        <input class="input__sign" type="text" name="username" id="username" placeholder="Username" required />
                        <input class="input__sign" type="password" name="password" id="password" placeholder="Password" required />
                        <button class="login__button" type="submit">Login</button>
                    </form>
                </div>
            </div>

            <div class="signup">
                <span>Don't have an account?</span><a href="register.php">Sign up</a>
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