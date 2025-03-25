<?php
include 'koneksi.php';

$sql = "INSERT INTO keperluan (deskripsi) VALUES ('Meeting'), ('Interview')";
$conn->query($sql);

$sql = "INSERT INTO tamu (nama, email, pesan, keperluan_id) VALUES
('Ali', 'ali@gmail.com', 'Mau bertemu manager', 1),
('Budi', 'budi@gmail.com', 'Wawancara kerja', 2)";
$conn->query($sql);

echo "Data berhasil dimasukkan!";
$conn->close();
?>
