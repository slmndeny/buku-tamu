<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";

// Koneksi ke MySQL
$conn = new mysqli($servername, $username, $password);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat database jika belum ada
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

// Buat tabel keperluan
$conn->query("CREATE TABLE IF NOT EXISTS keperluan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    deskripsi VARCHAR(255) NOT NULL
)");

// Buat tabel tamu
$conn->query("CREATE TABLE IF NOT EXISTS tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    keperluan_id INT,
    FOREIGN KEY (keperluan_id) REFERENCES keperluan(id)
)");

$conn->close();

echo "Database dan tabel berhasil dibuat.";
?>
