<?php

session_start();

require_once 'functions.php';
require_once 'db.php';

$_SESSION['loggedIn'] = 0;

if(isset($_POST['username']) && isset($_POST['password'])) {
    $userName = $_POST['username'];
    $userPass = $_POST['password'];

    $db2 = dbConn2();
    $userCredentials = getCredentials($db2, $userName);
    $username = $userCredentials['username'] ?? false;
    $password = $userCredentials['password'] ?? false;

    $sanitisedUsername = sanitise($userName);
    $sanitisedPassword = sanitise($userPass);
    $verifiedPassword = password_verify($sanitisedPassword, $password);
    validateUser($sanitisedUsername, $username, $verifiedPassword);
}

if ($_SESSION['loggedIn'] === 1) {
    header('Location: admin.php');
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS Log In | Matt Tapley | A Digital Me</title>
</head>
<body>
    <div class="container">
        <form class="loginBox" action="" method="post">
            <div class="userEntry">
                <label>Username: </label>
                <input type="text" name="username" />
            </div>
            <div class="password">
                <label>Password: </label>
                <input type="password" name="password" />
            </div>
            <div class="submit">
                <input type="submit" value="Log In" />
            </div>
        </form>
    </div>
</body>
</html>
