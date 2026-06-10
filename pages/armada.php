<?php

require_once './config/database.php';

$sql = "SELECT * FROM cars LIMIT 8";

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
    <link rel="stylesheet" href="./assets/css/global.css" />

    <title>Prime Drive Login</title>

</head>

<body>

    <?php include './components/navbar-member.php' ?>

    <?php include './components/banner.php' ?>

    <!-- CTA SECTION MULAI -->
    <section class="cta-banner pt-5" id="cars-section">
        <div class="container">
            <div class="cta-box">
                <h1>
                    Pilih Unit <br />
                    <span class="cta-tag">SEWA MOBIL</span> Sekarang!
                </h1>
                <h4>Nikmati pengalaman berkendara terbaik bersama Prime Drive</h4>
            </div>
        </div>
    </section>
    <!-- CTA SECTION SELESAI -->

    <!-- CARD CAR MULAI -->
    <section class="car-list-section py-5">
        <div class="container">
            <!-- CARD ROW -->
            <div class="row g-4">
                <?php while ($car = mysqli_fetch_assoc($result)) : ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="car-card">
                            <!-- IMAGE -->
                            <div class="car-image">
                                <img
                                    src="/assets/image/<?= $car['image']; ?>"
                                    alt="<?= $car['name']; ?>"
                                    class="img-fluid">
                            </div>
                            <!-- TITLE -->
                            <h5 class="car-title">
                                <?= $car['name']; ?>
                            </h5>
                            <!-- BADGE -->
                            <div class="car-badge">
                                <?php if ($car['status'] == 'rented'): ?>
                                    <span class="badge bg-danger">
                                        Rented
                                    </span>

                                <?php elseif ($car['status'] == 'available'): ?>
                                    <span class="badge bg-success">
                                        available
                                    </span>
                                    
                                <?php endif ?>
                            </div>
                            <!-- PRICE + RATING -->
                            <div class="car-info">
                                <div>
                                    <small>Harga Sewa:</small>
                                    <h6> Rp <?= number_format($car['price_per_day']); ?></h6>
                                </div>
                                <div class="car-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <!-- FEATURE -->
                            <div class="car-feature">
                                <div class="feature-item">
                                    <i class="bi bi-car-front-fill"></i>
                                    Rp <?= $car['capacity']; ?>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-gear-fill"></i>
                                    Manual
                                </div>
                            </div>
                            <!-- NOTE -->
                            <p class="car-note">
                                *Harga belum termasuk biaya tol, BBM, parkir, dll.
                            </p>
                            <!-- BUTTON -->
                            <button class="btn-book-car">
                                <i class="bi bi-calendar-check"></i>
                                <a href="/rent?id=<?= $car['id']; ?>">book now</a>
                            </button>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
    </section>
    <!-- CARD CAR SELESAI -->

    <?php include './components/footer.php' ?>

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>