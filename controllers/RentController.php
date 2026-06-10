<?php

require_once './config/database.php';

$userId = $_SESSION['user']['id'];

$carId = $_POST['car_id'];

$pickupLocation = $_POST['pickup_location'];

$rentalDays = $_POST['rental_days'];

$pickupTime = $_POST['pickup_time'];

$paymentMethod = $_POST['payment_method'];


// Ambil harga mobil
$carQuery = mysqli_query(
    $conn,
    "SELECT price_per_day
     FROM cars
     WHERE id = '$carId'"
);

$car = mysqli_fetch_assoc($carQuery);

$pricePerDay = $car['price_per_day'];

$subtotal = $pricePerDay * $rentalDays;

$tax = $subtotal * 0.11;

$totalPrice = $subtotal + $tax;


// Simpan booking
$sql = "INSERT INTO bookings (

    user_id,
    car_id,
    pickup_location,
    rental_days,
    pickup_time,
    payment_method,
    total_price,
    status

) VALUES (

    '$userId',
    '$carId',
    '$pickupLocation',
    '$rentalDays',
    '$pickupTime',
    '$paymentMethod',
    '$totalPrice',
    'Pending'

)";

$result = mysqli_query($conn, $sql);

if($result){

    $_SESSION['success'] =
        'Booking berhasil dibuat';

    header('Location: /my-booking');
    exit;

}else{

    $_SESSION['error'] =
        'Booking gagal';

    header('Location: /rent?id='.$carId);
    exit;

}