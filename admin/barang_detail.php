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

    <h3>Detail Barang</h3>

    <p>
        <a href="barang_list.php" class="btn btn-sm btn-secondary">Kembali</a>
        <a href="barang_form.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Ubah</a>
        <a href="barang_act_delete.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
    </p>

    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Kategori</th>
                <td><?= $data['nama_kategori'] ?></td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td><?= $data['nama_barang'] ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp<?= number_format($data['harga'], 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Stok</th>
                <td><?= $data['stok'] ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td><?= $data['deskripsi'] ?></td>
            </tr>
            <tr>
                <th>Gambar</th>
                <td class="text-center">
                    <img src="../uploads/barang/<?= $data['gambar'] ?>" class="img-fluid h-50" alt="...">
                    <p>
                        <?= $data['gambar'] ?>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

<?php endif; ?>

<?php include_once 'layout_footer.php' ?>
