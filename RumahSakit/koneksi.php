<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rs_uns";

// Membuat koneksii
$conn = mysqli_connect(hostname: $servername, username: $username, password: $password, database: $dbname);

// Periksa Koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";
?>