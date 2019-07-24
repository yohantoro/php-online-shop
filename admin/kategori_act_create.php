<?php

include_once '../config/connection.php';

if (isset($_POST)) {

    $nama_kategori = isset($_POST['nama_kategori']) ? $_POST['nama_kategori'] : '';

    $query = "INSERT INTO kategori (nama_kategori) VALUES (
        '$nama_kategori'
    )";

    if (mysqli_query($con, $query)) {
        header('location: kategori_detail.php?id=' . mysqli_insert_id($con));
    } else {
        die('Error: ' . mysqli_error($con));
    }
}

?>
