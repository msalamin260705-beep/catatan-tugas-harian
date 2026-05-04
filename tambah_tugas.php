<?php include 'koneksi.php'; 
$mk_id = $_GET['mk_id']; // ID Mata Kuliah yang dipilih
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-mobile">
        <div class="header-inline">
            <a href="dashboard.php" style="color:white; text-decoration:none;">←</a>
            <p>Isi Tugas</p>
        </div>
        <div class="form-container">
            <form action="simpan.php?jenis=tugas" method="POST">
                <input type="hidden" name="mk_id" value="<?php echo $mk_id; ?>">
                <input type="text" name="mandat" placeholder="Mandat Tugas" required>
                <textarea name="deskripsi" placeholder="Deskripsi Tugas/Apa yang dikerjakan" required style="width:100%; height:80px; margin-top:10px; border-radius:10px; padding:5px;"></textarea>
                <label style="font-size: 12px;">Tanggal Pemberian:</label>
                <input type="date" name="tgl_awal" required>
                <label style="font-size: 12px;">Tanggal Pengumpulan:</label>
                <input type="date" name="tgl_akhir" required>
                <button type="submit" class="btn-simpan">SIMPAN TUGAS</button>
            </form>
        </div>
    </div>
</body>
</html>