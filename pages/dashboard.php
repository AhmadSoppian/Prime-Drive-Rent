<?php

require_once './config/database.php';

$sql = "SELECT * FROM cars LIMIT 4";

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
                <div class="col-lg-4 col-md-6">
                    <div class="stats-card">
                        <i class="bi bi-calendar-check"></i>
                        <h3>1</h3>
                        <p>Active Booking</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="stats-card">
                        <i class="bi bi-check-circle"></i>
                        <h3>5</h3>
                        <p>Completed Rental</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="stats-card">
                        <i class="bi bi-cash-stack"></i>
                        <h3>Rp 4.5jt</h3>
                        <p>Total Spending</p>
                    </div>
                </div>
            </div>

            <!-- ACTIVE BOOKING -->
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="dashboard-card">
                        <div class="section-header">
                            <h2>Active Booking</h2>
                        </div>
                        <div class="booking-card">

                            <img
                                src="../assets/image/avanza.jpg"
                                alt="avanza"
                                class="booking-car">

                            <div>

                                <h4>Toyota Avanza</h4>

                                <p>
                                    10 June - 12 June
                                </p>

                                <span class="status-approved">
                                    Approved
                                </span>

                            </div>

                            <button class="btn-detail">
                                View Detail
                            </button>

                        </div>

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
                                <strong>5</strong>
                                <span>Total Rental</span>
                            </div>

                            <div>
                                <strong>1</strong>
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

                    <!-- Reuse car card yang sudah kamu punya -->

                    <?php while ($car = mysqli_fetch_assoc($result)) : ?>
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
                                    Book Now
                                </button>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <!-- HISTORY -->
                    <div class="dashboard-card mt-5">

                        <div class="section-header">
                            <h2>Rental History</h2>
                        </div>

                        <div class="table-responsive">

                            <table class="table">

                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Mobil</th>
                                        <th>Tanggal</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Avanza</td>
                                        <td>10 June 2025</td>
                                        <td>Rp 500.000</td>
                                        <td>
                                            Selesai
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Innova</td>
                                        <td>15 May 2025</td>
                                        <td>Rp 1.000.000</td>
                                        <td>
                                            Selesai
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

    </section>

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>