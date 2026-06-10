<?php

require_once './config/database.php';

$userId = $_SESSION['user']['id'];

$sql = "
SELECT
    bookings.*,
    cars.name
FROM bookings
JOIN cars
ON bookings.car_id = cars.id
WHERE bookings.user_id = '$userId'
ORDER BY bookings.id DESC
";

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/image/logoPrimeDrive.ico" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&family=Karma:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Style -->
    <link rel="stylesheet" href="assets/css/master-member.css">

    <title>Prime Drive Rent</title>

</head>

<body>

    <?php include './components/navbar-member.php' ?>

    <div class="container py-5">

        <h2 class="mt-5">
            My Booking
        </h2>

        <div class="table-responsive">

            <table class="table booking-table align-middle">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Mobil</th>
                        <th>Lokasi</th>
                        <th>Lama Sewa</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    <?php while ($booking = mysqli_fetch_assoc($result)) : ?>

                        <tr>

                            <td>
                                #<?= $booking['id']; ?>
                            </td>

                            <td>
                                <?= $booking['name']; ?>
                            </td>

                            <td>
                                <?= $booking['pickup_location']; ?>
                            </td>

                            <td>
                                <?= $booking['rental_days']; ?> Hari
                            </td>

                            <td>
                                Rp <?= number_format($booking['total_price']); ?>
                            </td>

                            <td>

                                <?php if ($booking['status'] == 'Pending'): ?>

                                    <span class="badge bg-warning text-dark">
                                        Pending
                                    </span>

                                <?php elseif ($booking['status'] == 'Active'): ?>

                                    <span class="badge bg-success">
                                        Active
                                    </span>

                                <?php elseif ($booking['status'] == 'Completed'): ?>

                                    <span class="badge bg-primary">
                                        Completed
                                    </span>

                                <?php elseif ($booking['status'] == 'Cancelled'): ?>

                                    <span class="badge bg-danger">
                                        Cancelled
                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>
    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>