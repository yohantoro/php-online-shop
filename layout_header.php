<?php
include_once 'config/connection.php';

session_start();

// unset($_SESSION['cart']);

$tamu = true;
if (isset($_SESSION['user'])) {
    $tamu = false;
    $tipeUser = $_SESSION['user']['type'];
}

$totalIsiKeranjang = 0;
if (isset($_SESSION['cart']['barang'])) {
    $totalIsiKeranjang = count($_SESSION['cart']['barang']);
    // echo "<pre>"; print_r($_SESSION['cart']['barang']); exit;
}

$resultKategori = mysqli_query($con, "SELECT * FROM kategori");
if ($resultKategori == false) {
    die('Error: ' . mysqli_error($con));
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/app/style.css">

        <script src="assets/jquery/jquery-3.3.1.min.js"></script>

        <title>Toko Saya</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Toko Saya</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-kategori">
                                <?php if (mysqli_num_rows($resultKategori) > 0) : ?>
                                    <?php foreach ($resultKategori as $kategori): ?>
                                        <a class="dropdown-item" href="#"><?= $kategori['nama_kategori'] ?></a>
                                    <?php endforeach; ?>
                                <?php endif ?>
                            </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#search-product-modal">Pencarian</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="cart.php">
                                <span class="badge badge-info"><?= $totalIsiKeranjang ?></span> Keranjang
                            </a>
                        </li>
                        <?php if ($tamu): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-info" href="register.php">Daftar</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link btn btn-secondary mr-1" href="<?= $tipeUser ?>">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-danger" href="user_act_logout.php">Logout</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main role="main" class="container">
