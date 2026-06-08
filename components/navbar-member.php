<!-- NAVBAR MULAI -->

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="./assets/image/logoPrimeDrive.png" alt="logoPrimeDrive" />
        </a>

        <!-- button hamburger -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- selesai -->

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard"> Home </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/cars"> Cars </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact"> Contact </a>
                </li>
            </ul>

            <!-- USER -->
            <div class="dropdown">

                <button
                    class="user-btn-nav"
                    data-bs-toggle="dropdown">
                    <div class="user-avatar-nav">
                        A
                    </div>
                    <?php if (isset($_SESSION['user'])) : ?>

                        <span class="user-name">
                            <?= $_SESSION['user']['username']; ?>
                        </span>

                    <?php endif; ?>
                    <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            History Rental
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a
                            class="dropdown-item text-danger"
                            href="/logout">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- NAVBAR SELESAI -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     