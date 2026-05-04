<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_tugas_mahasiswa";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

$check = mysqli_query($conn, "SELECT * FROM identitas LIMIT 1");
$user_exists = mysqli_num_rows($check) > 0;

$current_page = basename($_SERVER['PHP_SELF']);
if (!$user_exists && $current_page != 'identitas.php' && $current_page != 'simpan.php') {
    header("Location: identitas.php");
    exit();
}
?>