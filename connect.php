<?php
// Ganti dengan informasi database Anda
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "datasiswa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Berhasil terhubung ke database";
?>
