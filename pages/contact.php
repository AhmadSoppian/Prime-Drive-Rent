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

    <?php include './components/footer.php' ?>

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>