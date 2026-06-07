<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "prime_drive"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>