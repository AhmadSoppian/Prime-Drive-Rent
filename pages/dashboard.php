<?php

require_once './config/database.php';

$sql = "SELECT * FROM cars LIMIT 4";

$resultCars = mysqli_query($conn, $sql);

$userId = $_SESSION['user']['id'];

$sqlActive = "
SELECT COUNT(*) AS total_active
FROM bookings
WHERE user_id = '$userId'
AND status = 'Active'
";

$resultActive = mysqli_query($conn, $sqlActive);

$active = mysqli_fetch_assoc($resultActive);

$sqlActiveBooking = "
SELECT
    b.*,
    c.name,
    c.image
FROM bookings b
JOIN cars c
ON b.car_id = c.id
WHERE b.user_id = '$userId'
AND b.status = 'Active'
";

$resultActiveBooking = mysqli_query($conn, $sqlActiveBooking);

$sqlCompleted = "
SELECT COUNT(*) AS total_completed
FROM bookings
WHERE user_id = '$userId'
AND status = 'Completed'
";

$resultCompleted = mysqli_query($conn, $sqlCompleted);

$completed = mysqli_fetch_assoc($resultCompleted);
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

    <title>Prime Drive Dashboard</title>

</head>

<body>

    <?php include './components/navbar-member.php' ?>

    <section class="member-dashboard">
        <div class="container">
            <!-- HERO -->
            <div class="dashboard-hero">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <span class="dashboard-hero-subtitle">
                            MEMBER DASHBOARD
                        </span>
                        <?php if (isset($_SESSION['user'])) : ?>

                            <h2 class="dashboard-hero-title">
                                Welcome Back, <?= $_SESSION['user']['username']; ?>
                            </h2>

                        <?php endif; ?>
                        <p class="dashboard-hero-text">
                            Temukan kendaraan terbaik untuk perjalanan Anda hari ini.
                        </p>
                        <button class="dashboard-btn-book-car">
                            Book A Car
                        </button>
                    </div>
                </div>
            </div>
            <!-- STATISTIC -->
            <div class="row g-4 stats-section">
                <div class="col-lg-6 col-md-6">
                    <div class="stats-card">
                        <i class="bi bi-calendar-check"></i>
                        <h3><?= $active['total_active']; ?></h3>
                        <p>Active Booking</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="stats-card">
                        <i class="bi bi-check-circle"></i>
                        <h3> <?= $completed['total_completed']; ?></h3>
                        <p>Completed Rental</p>
                    </div>
                </div>
            </div>

            <!-- ACTIVE BOOKING -->
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="dashboard-card">
                        <div class="section-header">
                            <h2>
                                <?= $active['total_active']; ?>
                            </h2>

                            <p>Active Booking</p>
                        </div>
                        <?php if (mysqli_num_rows($resultActiveBooking) > 0): ?>

                            <?php while ($booking = mysqli_fetch_assoc($resultActiveBooking)): ?>

                                <div class="mini-car-card">

                                    <img
                                        src="../assets/image/<?= $booking['image']; ?>"
                                        alt="<?= $booking['name']; ?>">

                                    <h5>
                                        <?= $booking['name']; ?>
                                    </h5>

                                    <p>
                                        <?= $booking['rental_days']; ?>
                                        Hari
                                    </p>

                                    <span class="btn btn-success">
                                        <?= $booking['status']; ?>
                                    </span>

                                </div>

                            <?php endwhile; ?>

                        <?php else: ?>

                            <p>
                                Tidak ada booking aktif.
                            </p>

                        <?php endif; ?>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="profile-card">

                        <div class="profile-avatar">
                            A
                        </div>

                        <<?php if (isset($_SESSION['user'])) : ?>

                            <h2>
                            <?= $_SESSION['user']['username']; ?>
                            </h2>

                        <?php endif; ?>

                        <?php if (isset($_SESSION['user'])) : ?>

                            <p>
                                <?= $_SESSION['user']['role']; ?>
                            </p>

                        <?php endif; ?>

                        <hr>

                        <div class="profile-info">

                            <div>
                                <strong>
                                    <?= $completed['total_completed']; ?>
                                </strong>
                                <span>Total Rental</span>
                            </div>

                            <div>
                                <strong>
                                    <?= $active['total_active']; ?>
                                </strong>

                                <span>Active Booking</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- RECOMMENDED -->
            <div class="dashboard-card mt-5">

                <div class="section-header">
                    <h2>Recommended Cars</h2>
                </div>

                <div class="row g-4">

                    <?php while ($car = mysqli_fetch_assoc($resultCars)) : ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="mini-car-card">
                                <img
                                    src="./assets/image/<?= $car['image']; ?>"
                                    class="img-fluid"
                                    alt="<?= $car['name']; ?>">
                                <h5><?= $car['name']; ?></h5>
                                <span>
                                    Rp <?= number_format($car['price_per_day']); ?>
                                </span>
                                <h5><?= $car['status']; ?></h5>
                                <button>
                                    <a
                                        href="/rent?id=<?= $car['id']; ?>"
                                        class="btn-rent">
                                        Rent Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>

    </section>

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>