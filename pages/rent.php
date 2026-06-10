<?php

require_once './config/database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM cars WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

$car = mysqli_fetch_assoc($result);

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

    <div class="rent-page container">

        <!-- LEFT COLUMN -->
        <div class="rent-form-section">

            <form action="/booking" method="POST" id="bookingForm">

                <input
                    type="hidden"
                    name="car_id"
                    value="<?= $car['id']; ?>">

                <!-- DATA DIRI -->
                <section class="form-card">

                    <h2>Data Diri</h2>

                    <div class="form-group">

                        <label>Nama Lengkap</label>

                        <input
                            type="text"
                            name="fullname"
                            value="<?= $_SESSION['user']['username']; ?>"
                            readonly>

                    </div>

                    <div class="form-group">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            value="<?= $_SESSION['user']['email']; ?>"
                            readonly>

                    </div>


                </section>

                <!-- DETAIL PENGAMBILAN -->
                <section class="form-card">

                    <h2>Detail Pengambilan</h2>

                    <div class="form-group">

                        <label>Lokasi Penjemputan</label>

                        <input
                            type="text"
                            name="pickup_location"
                            placeholder="Masukkan alamat penjemputan"
                            required>

                    </div>

                    <div class="form-row">

                        <div class="form-group">

                            <label>Lama Sewa (Hari)</label>

                            <input
                                type="number"
                                min="1"
                                value="1"
                                id="rentalDays"
                                name="rental_days"
                                required>

                        </div>

                        <div class="form-group">

                            <label>Jam Pengambilan</label>

                            <input
                                type="time"
                                name="pickup_time"
                                required>

                        </div>

                    </div>

                </section>

                <!-- METODE PEMBAYARAN -->
                <section class="form-card">

                    <h2>Metode Pembayaran</h2>

                    <div class="payment-grid">

                        <label class="payment-card">

                            <input
                                type="radio"
                                name="payment_method"
                                value="bca"
                                required>

                            <div>
                                <h4>BCA Virtual Account</h4>
                            </div>

                        </label>

                        <label class="payment-card">

                            <input
                                type="radio"
                                name="payment_method"
                                value="mandiri">

                            <div>
                                <h4>Mandiri VA</h4>
                            </div>

                        </label>

                        <label class="payment-card">

                            <input
                                type="radio"
                                name="payment_method"
                                value="qris">

                            <div>
                                <h4>QRIS</h4>
                            </div>

                        </label>

                        <label class="payment-card">

                            <input
                                type="radio"
                                name="payment_method"
                                value="Kartu Kredit">

                            <div>
                                <h4>Kartu Kredit</h4>
                            </div>

                        </label>

                    </div>

                </section>

            </form>

        </div>

        <!-- RIGHT COLUMN -->
        <aside class="rent-summary">

            <div class="car-card">

                <img
                    src="./assets/image/<?= $car['image']; ?>"
                    alt="<?= $car['name']; ?>">

                <h3><?= $car['name']; ?></h3>

                <p>
                    Rp <?= number_format($car['price_per_day']); ?>/hari
                </p>

                <p>
                    <?= $car['capacity']; ?>
                </p>
            </div>

            <div class="summary-card">

                <h3>Ringkasan Pembayaran</h3>

                <div class="summary-item">

                    <span>Harga Perhari</span>

                    <span>
                        Rp <?= number_format($car['price_per_day']); ?>
                    </span>

                </div>

                <div class="summary-item">

                    <span>Lama Sewa</span>

                    <span id="daysText">
                        1 Hari
                    </span>

                </div>

                <div class="summary-item">

                    <span>PPN 11%</span>

                    <span id="taxText">
                        Rp 0
                    </span>

                </div>

                <hr>

                <div class="summary-total">

                    <span>Total</span>

                    <span id="totalText">
                        Rp 0
                    </span>

                </div>

                <button
                    type="submit"
                    form="bookingForm"
                    class="pay-btn">
                    Bayar Sekarang
                </button>

            </div>

        </aside>

    </div>

    <input
        type="hidden"
        id="price"
        value="<?= $car['price_per_day']; ?>">

    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const rentalDays =
            document.getElementById("rentalDays");

        const price =
            Number(document.getElementById("price").value);

        const daysText =
            document.getElementById("daysText");

        const taxText =
            document.getElementById("taxText");

        const totalText =
            document.getElementById("totalText");

        function calculateTotal() {

            let days = Number(rentalDays.value);

            let subtotal = days * price;

            let tax = subtotal * 0.11;

            let total = subtotal + tax;

            daysText.innerHTML =
                days + " Hari";

            taxText.innerHTML =
                "Rp " +
                tax.toLocaleString("id-ID");

            totalText.innerHTML =
                "Rp " +
                total.toLocaleString("id-ID");

        }

        calculateTotal();

        rentalDays.addEventListener(
            "input",
            calculateTotal
        );
    </script>
</body>

</html>