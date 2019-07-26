<?php

session_start();

if (isset($_POST['add_cart'])) {

    $jumlahSementara = 0;

    if (isset($_SESSION['cart']['barang'][$_POST['barang_id']])) {
        $jumlahSementara += $_SESSION['cart']['barang'][$_POST['barang_id']]['jumlah'];
    }

    $_SESSION['cart']['barang'][$_POST['barang_id']] = [
        'barang_id' => $_POST['barang_id'],
        'nama_barang' => $_POST['nama_barang'],
        'harga' => $_POST['harga'],
        'jumlah' => $jumlahSementara + $_POST['jumlah_barang']
    ];

    header('location:product_detail.php?id=' . $_POST['barang_id']); exit;
}

// unset($_SESSION['cart']);
// echo "<pre>"; print_r($_SESSION); exit;
?>
