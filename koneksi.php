<?php
$host = 'localhost'; // nama host (default: localhost)
$user = 'root'; // nama pengguna (default: root)
$password = ''; // kata sandi (default: kosong)
$database = 'simlaaab'; // nama database yang ingin Anda hubungkan

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";

// Menutup koneksi
mysqli_close($conn);
?>
