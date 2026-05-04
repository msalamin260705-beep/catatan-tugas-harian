<?php 
include 'koneksi.php'; 
$id_mk = $_GET['id'];
$mk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT nama_mk FROM matakuliah WHERE id_mk = '$id_mk'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-mobile">
        <nav class="navbar">
            <a href="index.php">Kembali</a>
            <span>Tugas: <?= $mk['nama_mk'] ?></span>
        </nav>
        
        <div class="form-container">
            <form action="simpan.php?jenis=tambah_tugas" method="POST">
                <input type="hidden" name="id_mk" value="<?= $id_mk ?>">
                <input type="text" name="judul" placeholder="Tugas Tentang Apa?" required>
                <label>Tanggal Pemberian:</label>
                <input type="date" name="tgl_pemberian" required>
                <label>Deadline Pengumpulan:</label>
                <input type="date" name="tgl_deadline" required>
                <button type="submit" class="btn-simpan">SIMPAN TUGAS</button>
            </form>
        </div>
    </div>
</body>
</html>