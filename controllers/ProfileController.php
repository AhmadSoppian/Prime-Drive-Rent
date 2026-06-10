<?php

session_start();

require_once './config/database.php';

$userId = $_SESSION['user']['id'];

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "
UPDATE users
SET
    username = '$username',
    email = '$email'
WHERE id = '$userId'
";

$result = mysqli_query($conn, $sql);

if(!empty($password)){

    $sqlPassword = "
    UPDATE users
    SET password = '$password'
    WHERE id = '$userId'
    ";

    mysqli_query($conn, $sqlPassword);

}

if($result){

    $_SESSION['user']['username'] = $username;
    $_SESSION['user']['email'] = $email;

    header('Location: /profile');
    exit;

}