<?php

include_once '../config/connection.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "DELETE FROM kategori WHERE id = $id";

    if (mysqli_query($con, $query)) {
        header('location: kategori_list.php');
    } else {
        die('Error: ' . mysqli_error($con));
    }
}

?>
