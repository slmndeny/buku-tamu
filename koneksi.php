<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db   = "buku_tamu"; 


$koneksi = mysqli_connect($host, $user, $pass, $db);


if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}
?>
