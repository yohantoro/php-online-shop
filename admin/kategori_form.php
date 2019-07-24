<?php

include_once 'layout_header.php';

$id             = 0;
$nama_kategori  = '';
$action         = 'kategori_act_create.php';
$title          = 'Buat Data Kategori';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
    $action = 'kategori_act_update.php';
    $title = 'Ubah Data Kategori';
}

$query = "SELECT * FROM kategori WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result == false) {
    die('Error: ' . mysqli_error($con));
}

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $nama_kategori = $data['nama_kategori'];
}

?>

<h3><?= $title ?></h3>

<p>
    <a href="kategori_list.php" class="btn btn-sm btn-secondary">Kembali</a>
</p>

<div class="card card-body">
    <form class="" action="<?= $action ?>" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="form-group">
            <label><strong>Nama Kategori</strong> </label>
            <input type="text" class="form-control" name="nama_kategori" value="<?= $nama_kategori ?>" required>
        </div>

        <button type="submit" name="submit" class="btn btn-info float-right">Simpan</button>
    </form>
</div>

<?php include_once 'layout_footer.php' ?>
