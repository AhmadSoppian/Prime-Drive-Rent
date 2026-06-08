<?php

session_start();

require_once './config/database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if (!$user) {

    header('Location: /login?error=email');
    exit;
}

if ($password != $user['password']) {

    header('Location: /login?error=password');
    exit;
}

$_SESSION['user'] = $user;

header('Location: /dashboard');
exit;
