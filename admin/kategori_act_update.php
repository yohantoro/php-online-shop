<?php

include_once '../config/connection.php';

if (isset($_POST)) {

    $id = $_POST['id'];
    $nama_kategori = isset($_POST['nama_kategori']) ? $_POST['nama_kategori'] : '';

    $query = "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id = $id";

    if (mysqli_query($con, $query)) {
        header('location: kategori_detail.php?id=' . $id);
    } else {
        die('Error: ' . mysqli_error($con));
    }
}

?>
