<?php

require_once 'config/connection.php';

if (isset($_POST['register'])) {
    // echo "<pre>"; var_dump($_POST); exit;
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $user_type = 'member';

    $query = "INSERT INTO user (
        email,
        username,
        password,
        nama_lengkap,
        alamat,
        no_telp,
        jenis_kelamin,
        tgl_lahir,
        user_type
    )
    VALUES (
        '$email',
        '$username',
        '$password',
        '$nama_lengkap',
        '$alamat',
        '$no_telp',
        $jenis_kelamin,
        '$tgl_lahir',
        '$user_type'
    )";

    if (mysqli_query($con, $query)) {

        session_start();

        $_SESSION['user']['id'] = mysqli_insert_id($con);
        $_SESSION['user']['name'] = $username;
        $_SESSION['user']['type'] = $user_type;

        header('location:member/index.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
