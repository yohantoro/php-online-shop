<?php

include_once 'layout_header.php';


$id = isset($_GET['id']) ? $_GET['id'] : 0;
$query = "SELECT
        barang.*, kategori.nama_kategori
    FROM barang JOIN kategori ON barang.kategori_id = kategori.id
    WHERE barang.id = $id";
$result = mysqli_query($con, $query);

if ($result == false) {
    die('Error: ' . mysqli_error($con));
}

?>

<?php if (mysqli_num_rows($result) <= 0): ?>

    <div class="alert alert-danger">
        <h1>404</h1>
        Halaman tidak ditemukan!
    </div>

<?php else:
    $data = mysqli_fetch_assoc($result);
?>

    <h3>Detail Produk</h3>
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="uploads/barang/<?= $data['gambar'] ?>" class="img-fluid" alt="image">
                        </div>
                        <div class="col-md-8">
                            <h4><?= $data['nama_barang'] ?></h4>
                            <p>
                                <small class="text-secondary">
                                    <em>
                                        <a href="#"><?= $data['nama_kategori'] ?> </a>
                                        >
                                        <?= $data['nama_barang'] ?>
                                    </em>
                                </small>
                            </p>
                            <hr>
                            <h2 class="text-danger">
                                <strong>
                                    Rp<?= number_format($data['harga'], 0, ',', '.') ?>
                                </strong>
                            </h2>

                            <p>
                                <?= $data['stok'] ?> stok tersedia
                            </p>

                            <form action="cart_act_add.php" method="post">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="hidden" name="barang_id" value="<?= $data['id'] ?>">
                                        <input type="hidden" name="nama_barang" value="<?= $data['nama_barang'] ?>">
                                        <input type="hidden" name="harga" value="<?= $data['harga'] ?>">
                                        
                                        <input type="number" name="jumlah_barang" class="form-control" value="1">
                                    </div>
                                    <div class="col">
                                        <button type="submit" name="add_cart" class="btn btn-outline-info">Tambah ke keranjang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-center">Detail Barang</h4>

                    <dl class="row">
                        <dt class="col-md-3">Deskripsi</dt>
                        <dd class="col-md-9">
                            <?= $data['deskripsi'] ?>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-md-3">Vendor</dt>
                        <dd class="col-md-9">ADADIS</dd>
                        <dt class="col-md-3">Dilihat</dt>
                        <dd class="col-md-9">1402 kali</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

<?php endif ?>

<?php include_once 'layout_footer.php'; ?>
