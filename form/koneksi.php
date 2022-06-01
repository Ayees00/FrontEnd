<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "koka";
$connet = mysqli_connect($host, $user, $pass, $db);

if (!$connet) {
    die("koneksi dengan database gagal : " . mysqli_connect_error());
}
?>