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
    <link rel="stylesheet" href="assets/css/master-login.css">

    <title>Prime Drive Login</title>

</head>

<body>

    <?php include './components/navbar.php' ?>

    <!-- LOGIN SECTION -->

    <section class="login-section">
        <div class="container">
            <div class="row align-items-center login-content">
                <!-- LEFT -->
                <div class="col-lg-7">
                    <div class="car-wrapper">
                        <img
                            src="./assets/image/logincars.png"
                            class="car-login"
                            alt="">
                    </div>
                </div>
                <!-- RIGHT -->
                <div class="col-lg-5">
                    <div class="login-card">
                        <h1 class="login-title">
                            Welcome our Member!
                        </h1>
                        <form>
                            <!-- USERNAME -->
                            <div class="mb-4">
                                <label class="form-label">
                                    Username
                                </label>
                                <input
                                    type="text"
                                    class="form-control custom-input"
                                    placeholder="Masukan Username Anda">
                            </div>
                            <!-- EMAIL -->
                            <div class="mb-4">
                                <label class="form-label">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    class="form-control custom-input"
                                    placeholder="Masukan Email Anda">
                            </div>
                            <!-- PASSWORD -->
                            <div class="mb-4">
                                <label class="form-label">
                                    Password
                                </label>
                                <input
                                    type="password"
                                    class="form-control custom-input"
                                    placeholder="Masukan Password Anda">
                            </div>
                            <!-- BUTTON -->
                            <button class="btn-login">
                                Login
                            </button>
                        </form>
                        <div class="bottom-text">
                            Already have account?
                            <a href="#">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>