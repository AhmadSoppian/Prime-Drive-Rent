<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./assets/image/logoPrimeDrive.ico" />
    <title>Prime Drive Rental</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;700&family=Karma:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Css Style -->
    <link rel="stylesheet" href="./assets/css/global.css" />
</head>

<body>
    <!-- NAVBAR -->
    <?php include './components/navbar.php'; ?>

    <!-- HERO SECTION MULAI -->

    <section class="hero-section" id="hero-section">
        <div class="hero-shape"></div>

        <!-- CAROUSEL -->

        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- SLIDE 1 -->

                <div class="carousel-item active">
                    <div class="container hero-content">
                        <div class="row align-items-center">
                            <!-- COL LEFT -->

                            <div class="col-lg-6">
                                <img src="./assets/image/carouseCars1.png" alt="" class="car-image" />

                                <!-- BENEFIT -->

                                <div class="benefit-list">
                                    <div class="benefit-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Sewa Mobil Murah</span>
                                    </div>

                                    <div class="benefit-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Sewa Mobil Berkualitas</span>
                                    </div>

                                    <div class="benefit-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Semua Kebutuhan Rental</span>
                                    </div>
                                </div>
                            </div>

                            <!-- COL RIGHT -->

                            <div class="col-lg-6">
                                <!-- FEATURE -->

                                <div
                                    class="d-flex gap-3 justify-content-lg-end feature-wrapper mb-5">
                                    <div class="feature-box">
                                        <i class="bi bi-car-front-fill"></i>
                                        <div>Lengkap</div>
                                    </div>

                                    <div class="feature-box">
                                        <i class="bi bi-cash-coin"></i>
                                        <div>Termurah</div>
                                    </div>

                                    <div class="feature-box">
                                        <i class="bi bi-shield-check"></i>
                                        <div>Berkualitas</div>
                                    </div>
                                </div>

                                <!-- TITLE -->

                                <div class="position-relative">
                                    <h1 class="hero-title">
                                        BEST <br />
                                        CAR
                                    </h1>

                                    <div class="for-now">FOR NOW</div>
                                </div>

                                <p class="hero-subtitle">
                                    Sewa Mobil Terbaik dan Termurah di Jakarta
                                </p>

                                <!-- BOTTOM INFO -->

                                <div class="row bottom-info">
                                    <div class="col-md-4 mb-4">
                                        <div class="bottom-card">
                                            <i class="bi bi-car-front-fill"></i>

                                            <div>Mobil terbaik dan berkualitas</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="bottom-card">
                                            <i class="bi bi-currency-dollar"></i>

                                            <div>Harga yang terjangkau</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="bottom-card">
                                            <i class="bi bi-shield-check"></i>

                                            <div>Aman dan terpercaya</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ADDRESS -->

                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="address-box">MAPS</div>
                                    <div class="address-text">
                                        Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen,
                                        Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10450
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->

                <div class="carousel-item">
                    <div class="container hero-content">
                        <div class="row align-items-center">
                            <!-- Kolom Teks -->
                            <div class="col-lg-6">
                                <h1 class="hero-title">
                                    PRIME <br> DRIVE
                                    <span class="for-now">FOR NOW</span>
                                </h1>
                                <p class="hero-subtitle">Sewa Mobil Terbaik dan Termurah di Jakarta</p>

                                <!-- Box Fitur (Opsional berdasarkan CSS kamu) -->
                                <div class="d-flex gap-3 mt-4">
                                    <div class="feature-box">
                                        <i class="bi bi-speedometer2"></i>
                                        <p class="m-0 small">Fast</p>
                                    </div>
                                    <div class="feature-box">
                                        <i class="bi bi-shield-check"></i>
                                        <p class="m-0 small">Safe</p>
                                    </div>
                                </div>
                                <a href="#" class="btn-book d-inline-block mt-4 text-decoration-none">RENT CAR</a>
                            </div>
                            <!-- Kolom Gambar -->
                            <div class="col-lg-6 text-center position-relative">
                                <img src="./assets/image/carouselCars2.png" alt="Car Image" class="car-image img-fluid">
                            </div>
                        </div>
                        <!-- ADDRESS -->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="address-box">MAPS</div>
                            <div class="address-text">
                                Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10450
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BUTTON -->

        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </section>
    <!-- HERO SECTION SELESAI -->

    <!-- HEADLINE SECTION MULAI -->
    <section class="headline-section py-5">
        <div class="container text-center">
            <h5 class="headline-small-title">Prime Drive Rental Mobil</h5>
            <h2 class="headline-title">Solusi Rental Mobil Termurah di Jakarta</h2>
        </div>
    </section>
    <!-- HEADLINE SECTION SELESAI -->

    <!-- FEATURE SECTION MULAI -->
    <section class="feature-service py-5">
        <div class="container">
            <div class="row g-4">
                <!-- CARD 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div>
                            <h5>Harga Murah</h5>
                            <p>Dapatkan sewa mobil dengan harga terjangkau.</p>
                        </div>
                    </div>
                </div>
                <!-- CARD 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div>
                            <h5>Booking Mudah</h5>
                            <p>Anda bisa booking sewa mobil langsung lewat web.</p>
                        </div>
                    </div>
                </div>
                <!-- CARD 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <div>
                            <h5>Berpengalaman</h5>
                            <p>Semua sopir kami sudah ahli dan berpengalaman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURE SECTION SELESAI -->

    <!-- ABOUT SECTION MULAI -->
    <section class="about-section py-5" id="about-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- IMAGE -->
                <div class="col-lg-6">
                    <img src="./assets/image/aboutPage.png" class="img-fluid" />
                </div>

                <!-- TEXT -->
                <div class="col-lg-6">
                    <span class="about-label"> About Us </span>
                    <h2 class="about-tagline">Prime Drive</h2>
                    <p class="about-paragraf">
                        Prime Drive adalah layanan rental mobil yang hadir untuk
                        memberikan solusi transportasi yang praktis, aman, dan nyaman.
                        Kami menyediakan berbagai pilihan kendaraan yang selalu dalam
                        kondisi prima dan siap digunakan untuk berbagai kebutuhan, mulai
                        dari perjalanan pribadi, bisnis, hingga liburan bersama keluarga.
                    </p>
                    <p class="about-paragraf">
                        Dengan pelayanan yang profesional dan proses pemesanan yang mudah,
                        Prime Drive berkomitmen memberikan pengalaman terbaik bagi setiap
                        pelanggan. Kami mengutamakan kenyamanan, keamanan, serta kepuasan
                        Anda dalam setiap perjalanan, sehingga Anda bisa berkendara dengan
                        tenang dan percaya diri bersama kami.
                    </p>
                    <button class="btn-book">BOOK NOW</button>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION SELESAI -->

    <!-- CTA SECTION MULAI -->
    <section class="cta-banner" id="cars-section">
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

    <!-- CONTACT SECTION MULAI -->
    <section class="contact-section py-5" id="contact-section">
        <div class="container">
            <div class="row g-5">
                <!-- LEFT SIDE -->
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h2 class="contact-title">
                            Kontak
                        </h2>
                        <div class="title-line"></div>
                        <p class="contact-desc">
                            informasi dan booking sewa mobil, hubungan kami :
                        </p>
                        <!-- PHONE -->
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <small>Phone :</small>
                                <p>084365756712</p>
                            </div>
                        </div>

                        <!-- WHATSAPP -->
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div>
                                <small>Whatsapp :</small>
                                <p>084365756712</p>
                            </div>
                        </div>

                        <!-- ADDRESS -->
                        <h3 class="address-title">
                            Alamat
                        </h3>
                        <div class="address-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p>
                                Jl. Kramat Raya No.23 C. RT.3/RW.2,
                                Kramat, Kec. Senen, Kota Jakarta Pusat
                            </p>
                        </div>
                        <!-- SOCIAL -->
                        <h4 class="social-title">
                            Follow us
                        </h4>
                        <div class="social-media">
                            <a href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- RIGHT SIDE -->
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <h3 class="form-title">
                            Tinggalkan Pesan dan Kritik Anda!
                        </h3>
                        <form>
                            <!-- ROW -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input
                                        type="text"
                                        class="form-control custom-input-home"
                                        placeholder="Nama">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input
                                        type="email"
                                        class="form-control custom-input-home"
                                        placeholder="E-email">
                                </div>
                            </div>
                            <!-- PHONE -->
                            <div class="mb-3">
                                <input
                                    type="text"
                                    class="form-control custom-input-home"
                                    placeholder="Nomor Hp">
                            </div>
                            <!-- MESSAGE -->
                            <div class="mb-4">
                                <textarea
                                    class="form-control custom-input-home"
                                    rows="6"
                                    placeholder="Pesan"></textarea>
                            </div>
                            <!-- BUTTON -->
                            <button class="btn-send">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION SELESAI -->

    <!-- FOOTER -->
    <?php include './components/footer.php'; ?>

    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>