<?php

require_once 'config/database.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Cek email
$check = mysqli_query(
    $conn,
    "SELECT id FROM users WHERE email='$email'"
);

if (mysqli_num_rows($check) > 0) {

    die("Email sudah terdaftar");

}

// Simpan user
$sql = "INSERT INTO users(username,email,password)
        VALUES('$username','$email','$password')";

$result = mysqli_query($conn, $sql);

if ($result) {

    header("Location: /login");
    exit;

} else {

    echo "Register gagal";

}