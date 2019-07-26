<?php

include_once 'layout_header.php';

$search = '';

// ambil semua data dari tabel kategori
$query = "SELECT barang.*, kategori.nama_kategori
    FROM barang JOIN kategori ON barang.kategori_id = kategori.id";

// jika ada parameter 'search' dari address bar
if (isset($_GET['search']) && $_GET['search'] != '') {
    $search = $_GET['search'];
    // buat kondisi berdasarkan parameter search
    $query .= " WHERE kategori.nama_kategori LIKE '%$search%'
    OR barang.nama_barang LIKE '%$search%'";
}
$result = mysqli_query($con, $query);

// jika query gagal, hentikan program
if ($result == false) {
    die('Error: ' . mysqli_error($con));
}

$no = 0;

?>

<h3>Barang</h3>

<div class="row mb-2">
    <div class="col-lg-12 d-flex justify-content-between">

        <a href="barang_form.php" class="btn btn-success">Buat Baru</a>

        <form class="form-inline" action="" method="get">
            <input type="search" name="search" class="form-control mr-2" value="<?= $search ?>" autofocus placeholder="Cari Nama Kategori">
            <button class="btn btn-outline-info mr-1" type="submit" title="Cari">
                <i class="fa fa-search"></i>
            </button>
            <a href="barang_list.php" class="btn btn-outline-secondary" title="Hapus Pencarian">
                <i class="fa fa-refresh"></i>
            </a>
        </form>

    </div>
</div>

<?php if (isset($_GET['search']) && $_GET['search'] != ''): ?>
    <!-- Informasi pencarian -->
    <small>Pencarian dengan kata kunci:
        <i class="text-primary"><?= $_GET['search'] ?></i>
    </small>
<?php endif; ?>

<?php if (mysqli_num_rows($result) <= 0): ?>

    <div class="alert alert-warning">
        Belum ada data.
    </div>

<?php else: ?>
    <table class="table table-bordered table-sm table-hover mt-2">
        <thead class="thead-dark">
            <th>No.</th>
            <th>Nama Kategori</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th class="text-center">Aksi</th>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): $no++; ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['nama_kategori'] ?></td>
                <td><?= $row['nama_barang'] ?></td>
                <td>Rp<?= number_format($row['harga'], 0, ',', '.') ?></td>
                <td><?= $row['stok'] ?></td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="barang_detail.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-info" title="Detail">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="barang_form.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning" title="Ubah">
                            <i class="fa text-white fa-edit"></i>
                        </a>
                        <a href="barang_act_delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php endwhile ?>
        </tbody>
    </table>

<?php endif; ?>

<?php include_once 'layout_footer.php' ?>
