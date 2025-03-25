<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error membuat database: " . $conn->error . "<br>";
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS keperluan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    deskripsi VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabel keperluan berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error membuat tabel keperluan: " . $conn->error . "<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    keperluan_id INT,
    FOREIGN KEY (keperluan_id) REFERENCES keperluan(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabel tamu berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error membuat tabel tamu: " . $conn->error . "<br>";
}

$conn->close();
?>
