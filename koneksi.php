<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_tugas_mahasiswa");

// Cek apakah data identitas sudah diisi
$check = mysqli_query($conn, "SELECT * FROM identitas LIMIT 1");
$user_exists = mysqli_num_rows($check) > 0;

if (!$user_exists && basename($_SERVER['PHP_SELF']) != 'identitas.php' && basename($_SERVER['PHP_SELF']) != 'simpan.php') {
    header("Location: identitas.php");
    exit();
}
?>