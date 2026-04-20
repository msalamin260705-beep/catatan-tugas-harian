<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Tugas Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <p>SELAMAT DATANG</p>
            <img src="https://i.ibb.co.com/kVvnCGtt/IMG-20260413-WA0001.jpg" alt="Logo" class="logo">
            <h3>CATATAN TUGAS HARIAN MAHASISWA</h3>
        </div>

        <div class="form-card">
            <h4>IDENTITAS PRIBADI</h4>
            <form action="simpan.php" method="POST">
                <input type="text" name="nama_mahasiswa" placeholder="Nama Mahasiswa" required>
                <input type="text" name="nim" placeholder="NIM" required>
                <input type="text" name="prodi" placeholder="Prodi" required>
                
                <select name="jenjang" required>
                    <option value="" disabled selected>Jenjang</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>

                <input type="text" name="asal_universitas" placeholder="Asal Universitas" required>
                
                <button type="submit" name="simpan" class="btn-simpan">SIMPAN</button>
            </form>
        </div>
    </div>
</body>
</html>