<?php include_once 'layout_header.php'; ?>

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
                        <?php for ($i=1; $i < 5; $i++): ?>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <img src="assets/images/products/1bw_sporty.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <a href="product_detail.php?id=<?= $i ?>">
                                        <h5 class="card-title">Nama Produk</h5>
                                    </a>
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
                        <?php for ($i=1; $i < 5; $i++): ?>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <img src="assets/images/products/85ferrari_red.jpg" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <a href="product_detail.php?id=<?= $i ?>">
                                        <h5 class="card-title">Nama Produk</h5>
                                    </a>
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

<?php include_once 'layout_footer.php'; ?>
