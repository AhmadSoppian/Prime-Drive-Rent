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

    <?php include './components/footer.php' ?>

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>