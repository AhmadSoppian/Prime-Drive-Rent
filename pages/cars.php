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

    <?php include './components/navbar.php' ?>

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
                <!-- CARD 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="car-card">
                        <!-- IMAGE -->
                        <div class="car-image">
                            <img
                                src="img/land-cruiser.png"
                                alt="Toyota Land Cruiser"
                                class="img-fluid">
                        </div>
                        <!-- TITLE -->
                        <h5 class="car-title">
                            Toyota Land Cruiser
                        </h5>
                        <!-- BADGE -->
                        <div class="car-badge">
                            Termasuk Sopir
                        </div>
                        <!-- PRICE + RATING -->
                        <div class="car-info">
                            <div>
                                <small>Harga Sewa:</small>
                                <h6>Rp 6.500.000</h6>
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
                                7 Seat
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
                            <a href="/login">book now</a>
                        </button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="car-card">
                        <div class="car-image">
                            <img
                                src="img/pajero.png"
                                alt=""
                                class="img-fluid">
                        </div>
                        <h5 class="car-title">
                            Mitsubishi Pajero Sport
                        </h5>
                        <div class="car-badge">
                            Termasuk Sopir
                        </div>
                        <div class="car-info">
                            <div>
                                <small>Harga Sewa:</small>
                                <h6>Rp 800.000</h6>
                            </div>
                            <div class="car-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="car-feature">
                            <div class="feature-item">
                                <i class="bi bi-car-front-fill"></i>
                                7 Seat
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-gear-fill"></i>
                                Manual
                            </div>
                        </div>
                        <p class="car-note">
                            *Harga belum termasuk biaya tol, BBM, parkir, dll.
                        </p>
                        <button class="btn-book-car">
                            <i class="bi bi-calendar-check"></i>
                            <a href="/login">book now</a>
                        </button>
                    </div>
                </div>
                <!-- CARD 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="car-card">
                        <div class="car-image">
                            <img
                                src="img/zenix.png"
                                alt=""
                                class="img-fluid">
                        </div>
                        <h5 class="car-title">
                            Toyota Innova Zenix
                        </h5>
                        <div class="car-badge">
                            Termasuk Sopir
                        </div>
                        <div class="car-info">
                            <div>
                                <small>Harga Sewa:</small>
                                <h6>Rp 1.000.000</h6>
                            </div>
                            <div class="car-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="car-feature">
                            <div class="feature-item">
                                <i class="bi bi-car-front-fill"></i>
                                7 Seat
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-gear-fill"></i>
                                Manual
                            </div>
                        </div>
                        <p class="car-note">
                            *Harga belum termasuk biaya tol, BBM, parkir, dll.
                        </p>
                        <button class="btn-book-car">
                            <i class="bi bi-calendar-check"></i>
                            <a href="/login">book now</a>
                        </button>
                    </div>
                </div>
                <!-- CARD 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="car-card">
                        <div class="car-image">
                            <img
                                src="img/calya.png"
                                alt=""
                                class="img-fluid">
                        </div>
                        <h5 class="car-title">
                            Toyota Calya
                        </h5>
                        <div class="car-badge">
                            Termasuk Sopir
                        </div>
                        <div class="car-info">
                            <div>
                                <small>Harga Sewa:</small>
                                <h6>Rp 500.000</h6>
                            </div>
                            <div class="car-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="car-feature">
                            <div class="feature-item">
                                <i class="bi bi-car-front-fill"></i>
                                7 Seat
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-gear-fill"></i>
                                Manual
                            </div>
                        </div>
                        <p class="car-note">
                            *Harga belum termasuk biaya tol, BBM, parkir, dll.
                        </p>
                        <button class="btn-book-car">
                            <i class="bi bi-calendar-check"></i>
                            <a href="/login">book now</a>
                        </button>
                    </div>
                </div>
            </div>
            <!-- BOTTOM -->
            <div class="text-center mt-5">
                <p class="buttom-text">
                    Masih banyak pilihan unit mobil yang bisa anda sewa,
                    klik button berikut ini
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <button class="btn-more">
                        Temukan Pilihan Mobil Lain
                    </button>
                    <button class="btn-outline-custom">
                        UNIT LAIN
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- CARD CAR SELESAI -->

    <?php include './components/footer.php' ?>

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>