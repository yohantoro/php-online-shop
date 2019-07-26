<?php

require_once '../config/connection.php';

if (isset($_POST['simpan'])) {

    $kategoriId = $_POST['kategori_id'];
    $namaBarang = htmlspecialchars($_POST['nama_barang']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $fileName = '';

    if (isset($_FILES['gambar']) && $_FILES['gambar']['size'] !== 0) {
        $uploadsDirectory = '../uploads/barang/'; // folder simpan file

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
        // echo "<pre>"; var_dump($fileExtension); exit;
    }

    $query = "INSERT INTO barang (kategori_id, nama_barang, deskripsi, harga, stok, gambar)
        VALUES ($kategoriId, '$namaBarang', '$deskripsi', $harga, $stok, '$fileName')";

    if (mysqli_query($con, $query)) {
        // echo "data berhasil diinput";
        header('location:barang_detail.php?id=' . mysqli_insert_id($con));
    } else {
        die(mysqli_error($con));
    }

}

?>
