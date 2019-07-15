<?php

const HOST          = 'localhost';
const DB_NAME       = 'yourdatabase';
const DB_USERNAME   = 'yourusername';
const DB_PASSWORD   = 'yourpassword';

$con = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (mysqli_connect_errno()) {
    die('Gagal menghubungkan ke database. Error: ' . mysqli_connect_error());
}
