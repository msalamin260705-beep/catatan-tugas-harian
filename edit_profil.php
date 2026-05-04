<?php 
include 'koneksi.php'; 
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM identitas LIMIT 1"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gradient">
    <div class="card-mobile no-border">
        <form action="simpan.php?jenis=edit_profil" method="POST" enctype="multipart/form-data">
            <div class="profile-circle">
                <img src="uploads/<?= $user['foto_profil'] ?>" id="preview">
            </div>
            <input type="file" name="foto" onchange="previewImage(this)">
            
            <div class="info-list">
                <input type="text" name="nama" value="<?= $user['nama'] ?>" class="info-item-input">
                <input type="text" name="nim" value="<?= $user['nim'] ?>" class="info-item-input">
                <input type="text" name="prodi" value="<?= $user['prodi'] ?>" class="info-item-input">
                <select name="jenjang" class="info-item-input">
                    <option value="S1" <?= $user['jenjang'] == 'S1' ? 'selected' : '' ?>>S1</option>
                    <option value="S2" <?= $user['jenjang'] == 'S2' ? 'selected' : '' ?>>S2</option>
                </select>
                <input type="text" name="universitas" value="<?= $user['universitas'] ?>" class="info-item-input">
            </div>
            <button type="submit" class="btn-save">SIMPAN PERUBAHAN</button>
        </form>
    </div>
    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>