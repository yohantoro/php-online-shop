<?php

include_once '../config/connection.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/app/style.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

        <script src="../assets/jquery/jquery-3.3.1.min.js"></script>

        <title>Toko Saya</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Toko Saya</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="kategori_list.php">
                                Kategori
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="barang_list.php">
                                Barang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaksi_list.php">
                                Transaksi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user_list.php">
                                User
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-secondary" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main role="main" class="container">
