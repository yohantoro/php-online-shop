<?php

include_once 'layout_header.php';

$judul      = 'Buat Data Barang';
$action     = 'barang_act_create.php';
$id         = isset($_GET['id']) ? $_GET['id'] : 0;
$namaBarang = '';
$deskripsi  = '';
$harga      = '';
$stok       = 0;
$gambar     = '';

$queryBarang = "SELECT * FROM barang WHERE id = $id";
$resultBarang = mysqli_query($con, $queryBarang);

if ($resultBarang == false) {
    die('Error: ' . mysqli_error($con));
}

if (mysqli_num_rows($resultBarang) > 0) {
    $judul = 'Ubah Data Barang';
    $action = 'barang_act_update.php';

    $data = mysqli_fetch_assoc($resultBarang);
    $id = $data['id'];
    $kategoriId = $data['kategori_id'];
    $namaBarang = $data['nama_barang'];
    $deskripsi = $data['deskripsi'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $gambar = $data['gambar'];
}

$resultKategori = mysqli_query($con, "SELECT * FROM kategori");
if ($resultKategori == false) {
    die('Error: ' . mysqli_error($con));
}


?>

<h3><?= $judul ?></h3>

<p>
    <a href="barang_list.php" class="btn btn-sm btn-secondary">Kembali</a>
</p>

<div class="card card-body">
    <form class="" action="<?= $action ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control" name="kategori_id" required>
                <option value="" class="text-muted">Pilih Kategori</option>
                <?php if (mysqli_num_rows($resultKategori) > 0) : ?>
                    <?php foreach ($resultKategori as $kategori):
                        $selected = '';
                        if ($kategori['id'] == $kategoriId) {
                            $selected = 'selected';
                        }
                    ?>
                        <option value="<?= $kategori['id'] ?>" <?= $selected ?>>
                            <?= $kategori['nama_kategori'] ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" value="<?= $namaBarang ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">Harga</label>
            <input type="number" name="harga" class="form-control" value="<?= $harga ?>" required>
        </div>

        <div class="form-group">
            <label for="">Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= $stok ?>" required>
        </div>

        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required><?= $deskripsi ?></textarea>
        </div>

        <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name="gambar" class="form-control-file">
            <?php if ($gambar != ''): ?>
                <div class="row col-md-6 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <img src="../uploads/barang/<?= $gambar ?>" alt="<?= $gambar ?>" class="card-img-top img-fluid h-25">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <button type="submit" name="simpan" class="btn btn-info">Simpan</button>
    </form>
</div>

<?php include_once 'layout_footer.php' ?>
