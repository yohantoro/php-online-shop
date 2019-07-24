<?php
include_once 'layout_header.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$query = "SELECT * FROM kategori WHERE id = $id";
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

    <h3>Detail Kategori</h3>

    <p>
        <a href="kategori_list.php" class="btn btn-sm btn-secondary">Kembali</a>
    </p>

    <table class="table table-bordered">
        <tbody>
            <th>Nama Kategori</th>
            <td><?= $data['nama_kategori'] ?></td>
        </tbody>
    </table>

<?php endif; ?>

<?php include_once 'layout_footer.php' ?>
