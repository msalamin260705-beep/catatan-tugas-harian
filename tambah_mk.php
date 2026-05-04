<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="card-mobile">
        <nav class="navbar">
            <a href="index.php"><i class="fas fa-arrow-left"></i></a>
            <span>Tambah Mata Kuliah</span>
        </nav>
        
        <div class="form-container">
            <form action="simpan.php?jenis=tambah_mk" method="POST">
                <input type="text" name="matakuliah" placeholder="Mata Kuliah" required>
                <input type="number" name="semester" placeholder="Semester" required>
                <input type="text" name="dosen" placeholder="Dosen" required>
                <button type="submit" class="btn-simpan">SIMPAN</button>
            </form>
        </div>
    </div>
</body>
</html>