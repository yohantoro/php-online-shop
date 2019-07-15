<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/app/style.css">

        <title>Toko Saya</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Toko Saya</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-referensi">
                                <a class="dropdown-item" href="#">Fashion</a>
                                <a class="dropdown-item" href="#">Elektronik</a>
                                <a class="dropdown-item" href="#">Makanan</a>
                                <a class="dropdown-item" href="#">Mobil</a>
                                <a class="dropdown-item" href="#">Motor</a>
                                <a class="dropdown-item" href="#">Game</a>
                                <a class="dropdown-item" href="#">Hobi</a>
                            </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#search-product-modal">Pencarian</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                <span class="badge badge-light">0</span> Chart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main role="main" class="container">

            <div class="jumbotron text-center">
                <h1>Welcome to Toko Saya</h1>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="card-title">
                                Produk Terbaru
                                <div class="float-right">
                                    <a href="#">Lihat Semua</a>
                                </div>
                            </div>
                            <div class="row">
                                <?php for ($i=0; $i < 4; $i++): ?>
                                <div class="col-lg-3">
                                    <div class="card mb-3">
                                        <img src="assets/images/products/1bw_sporty.jpg" class="card-img-top" alt="image">
                                        <div class="card-body">
                                            <h5 class="card-title">Nama Produk</h5>
                                            <p class="card-text text-danger">Rp150.000</p>
                                            <p class="card-text">
                                                <button type="button" name="button" class="btn btn-outline-info btn-sm btn-block">+ Masukkan keranjang</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="card-title">
                                Produk Terpopuler
                                <div class="float-right">
                                    <a href="#">Lihat Semua</a>
                                </div>
                            </div>
                            <div class="row">
                                <?php for ($i=0; $i < 4; $i++): ?>
                                <div class="col-lg-3">
                                    <div class="card mb-3">
                                        <img src="assets/images/products/85ferrari_red.jpg" class="card-img-top" alt="image">
                                        <div class="card-body">
                                            <h5 class="card-title">Nama Produk</h5>
                                            <p class="card-text text-danger">Rp200.000</p>
                                            <p class="card-text">
                                                <button type="button" name="button" class="btn btn-outline-info btn-sm btn-block">+ Masukkan keranjang</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main><!-- /.container -->

        <!-- Modal -->
        <div class="modal fade" id="search-product-modal" tabindex="-1" role="dialog" aria-labelledby="search-product-label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="search-product-label">Cari Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="get">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Masukkan nama produk">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
