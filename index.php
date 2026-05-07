<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mobile-frame" style="text-align: center;">
        <img src="https://i.ibb.co.com/kVvnCGtt/IMG-20260413-WA0001.jpg" class="logo-main">
        <h2>SELAMAT DATANG</h2>
        <p>Aplikasi Catatan Tugas Harian</p>
        
        <div style="margin-top: 100px;">
            <button onclick="location.href='login.php'" class="btn-white">MASUK</button>
            <button onclick="location.href='daftar.php'" class="btn-white" style="background: transparent; color: white; border: 2px solid white;">DAFTAR</button>
        </div>
    </div>
</body>
</html>