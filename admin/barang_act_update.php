<?php

require_once '../config/connection.php';
// echo "<pre>"; var_dump($_FILES['gambar']); exit;
if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $kategoriId = $_POST['kategori_id'];
    $namaBarang = htmlspecialchars($_POST['nama_barang']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    // $fileName = '';

    $query = "UPDATE barang
    SET
        kategori_id = $kategoriId,
        nama_barang = '$namaBarang',
        deskripsi = '$deskripsi',
        harga = $harga,
        stok = $stok";

    if (isset($_FILES) && $_FILES['gambar']['size'] !== 0) {
        $uploadsDirectory = '../uploads/barang/';
        $fileExtension = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
        $fileName = $namaBarang . '.' . $fileExtension;
        $allowUpload = true;

        // Check file size
        // 2 MB max.
        if ($_FILES["gambar"]["size"] > 2*1048576) {
            echo "Sorry, your file is too large.";
            $allowUpload = false;
        }
        // Allow certain file formats
        if($fileExtension != "jpg" && $fileExtension != "png" && $fileExtension != "jpeg") {
            echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
            $allowUpload = false;
        }

        if ($allowUpload) {
            move_uploaded_file($_FILES["gambar"]["tmp_name"], $uploadsDirectory . $fileName);
        }

        $query .= ", gambar = '$fileName'";
    }
    $query .= " WHERE id = $id";

    if (mysqli_query($con, $query)) {
        // echo "data berhasil diupdate";
        header('location:barang_detail.php?id=' . $id);
    } else {
        die(mysqli_error($con));
    }

}

?>
