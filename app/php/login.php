<?php

session_start();

require_once 'db.php';

function getCredentials(PDO $db) : array {
    $userQuery = $db->prepare("SELECT `username`, `password` FROM `users` WHERE `id` = 1;");
    $userQuery->execute();
    $userCredentials = $userQuery->fetch();
    return $userCredentials;
}

function getUser(array $userCredentials) : string {
    if (array_key_exists('username', $userCredentials)) {
        return $userCredentials['username'];
    }
}

function getPassword(array $userCredentials) : string {
    if (array_key_exists('password', $userCredentials)) {
        return $userCredentials['password'];
    }
}

function sanitise(string $string) : string {
    $sanitised = filter_var($string, FILTER_SANITIZE_STRING);
    return $sanitised;
}

function verifyPassword($sanitisedPassword, $password) {
    var_dump($sanitisedPassword);
    if (password_verify($sanitisedPassword, $password)) {
        return true;
    } else {
        return false;
    }
}

function validateUser(string $sanitisedUser, string $username, $verifiedPassword)
{
    if ($sanitisedUser == $username && $verifiedPassword == true) {
        $_SESSION['loggedIn'] = 1;

    } else {
        $_SESSION['loggedIn'] = 0;
    }
}

if(isset($_POST['username']) && isset($_POST['password'])){
    $userName = $_POST['username'];
    $userPass = $_POST['password'];

    $db2 = dbConn2();
    $userCredentials = getCredentials($db2);
    $username = getUser($userCredentials);
    $password = getPassword($userCredentials);

    $sanitisedUsername = sanitise($userName);
    $sanitisedPassword = sanitise($userPass);
    $verifiedPassword = verifyPassword($sanitisedPassword, $userCredentials['password']);
    var_dump($verifiedPassword);
    validateUser($sanitisedUsername, $username, $verifiedPassword);
}

if ($_SESSION['loggedIn'] == 1) {
    header('Location: admin.php');
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In | Matt Tapley | A Digital Me</title>

</head>
<body>
    <div class="container">
        <form class="loginBox" action="" method="post">
            <div class="userEntry">
                <label>Username: </label>
                <input type="text" name="username">
            </div>
            <div class="password">
                <label>Password: </label>
                <input type="password" name="password">
            </div>
            <div class="submit">
                <input type="submit" value="Log In" />
            </div>
        </form>
    </div>
</body>
</html>
