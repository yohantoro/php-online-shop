<?php

include_once 'layout_header.php';

$resultBarang = mysqli_query($con, "SELECT * FROM barang LIMIT 20");
if ($resultBarang == false) {
    die('Error: ' . mysqli_error($con));
}
?>

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
                        <?php if (mysqli_num_rows($resultBarang) > 0): ?>
                            <?php foreach ($resultBarang as $barang): ?>
                                <div class="col-lg-3">
                                    <div class="card mb-3">
                                        <img src="uploads/barang/<?= $barang['gambar'] ?>" class="card-img-top img-fluid" width="50" alt="image">
                                        <div class="card-body">
                                            <a href="product_detail.php?id=<?= $barang['id'] ?>">
                                                <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
                                            </a>
                                            <p class="card-text text-danger">Rp<?= number_format($barang['harga'], 0, ',', '.') ?></p>
                                            <p class="card-text">
                                                <a href="product_detail.php?id=<?= $barang['id'] ?>" class="btn btn-info btn-sm btn-block">Lihat Detail</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'layout_footer.php'; ?>
