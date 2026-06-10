<?php

require_once './config/database.php';

$userId = $_SESSION['user']['id'];

$sql = "
SELECT *
FROM users
WHERE id = '$userId'
";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

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

    <title>Prime Drive Profile</title>

</head>

<body>

    <?php include './components/navbar-member.php'; ?>

    <section class="profile-section">

        <div class="container">

            <div class="profile-container">

                <div class="row">

                    <!-- SIDEBAR -->

                    <div class="col-lg-4">

                        <div class="profile-sidebar">

                            <div class="profile-avatar">

                                <?= strtoupper(substr($user['username'], 0, 1)); ?>

                            </div>

                            <h3 class="profile-name">

                                <?= $user['username']; ?>

                            </h3>

                            <p class="profile-role">

                                <?= $user['role']; ?>

                            </p>

                        </div>

                    </div>

                    <!-- FORM -->

                    <div class="col-lg-8">

                        <div class="profile-content">

                            <h2>
                                My Profile
                            </h2>

                            <form
                                action="/profile/update"
                                method="POST">

                                <div class="mb-3">

                                    <label>
                                        Username
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        name="username"
                                        value="<?= $user['username']; ?>"
                                        required>

                                </div>

                                <div class="mb-3">

                                    <label>
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        value="<?= $user['email']; ?>"
                                        required>

                                </div>

                                <div class="mb-3">

                                    <label>
                                        New Password
                                    </label>

                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="Leave blank if you don't want to change it">

                                </div>

                                <button
                                    type="submit"
                                    class="btn-update">

                                    Update Profile

                                </button>

                            </form>

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