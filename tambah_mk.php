<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-mobile">
        <div class="header-inline">
            <a href="dashboard.php" style="color:white; text-decoration:none;">←</a>
            <p>Tambah Mata Kuliah</p>
        </div>
        <div class="form-container">
            <form action="simpan.php?jenis=matkul" method="POST">
                <input type="text" name="nama_mk" placeholder="Mata Kuliah" required>
                <input type="number" name="semester" placeholder="Semester" required>
                <input type="text" name="dosen" placeholder="Dosen" required>
                <button type="submit" class="btn-simpan">SIMPAN</button>
            </form>
        </div>
    </div>
</body>
</html>