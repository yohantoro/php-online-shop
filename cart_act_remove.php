<?php

session_start();
if (isset($_GET['barang_id'])) {

    $jumlahSementara = 0;
    if (isset($_SESSION['cart']['barang'][$_GET['barang_id']])) {
        unset($_SESSION['cart']['barang'][$_GET['barang_id']]);
    }

    header('location:cart.php'); exit;
}

// unset($_SESSION['cart']);
// echo "<pre>"; print_r($_SESSION); exit;
?>
