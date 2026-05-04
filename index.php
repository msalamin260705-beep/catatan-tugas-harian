<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Identitas Diri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-mobile">
        <p class="text-center">SELAMAT DATANG</p>
        <img src="https://i.ibb.co.com/kVvnCGtt/IMG-20260413-WA0001.jpg" class="logo-circular">
        <h3>CATATAN TUGAS HARIAN MAHASISWA</h3>
        
        <div class="form-container">
            <h4>IDENTITAS PRIBADI</h4>
            <form action="simpan.php?jenis=identitas" method="POST">
                <input type="text" name="nama" placeholder="Nama Mahasiswa" required>
                <input type="text" name="nim" placeholder="NIM" required>
                <input type="text" name="prodi" placeholder="Prodi" required>
                <select name="jenjang">
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
                <input type="text" name="universitas" placeholder="Asal Universitas" required>
                <button type="submit" class="btn-simpan">SIMPAN</button>
            </form>
        </div>
    </div>
</body>
</html>