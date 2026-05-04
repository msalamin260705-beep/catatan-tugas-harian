<?php include 'koneksi.php'; 
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM identitas LIMIT 1"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil Pribadi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gradient">
    <div class="card-mobile no-border">
        <h2 class="text-white">Profil Pribadi</h2>
        <div class="profile-circle">
            <img src="uploads/<?= $user['foto_profil'] ?>" alt="User">
        </div>
        
        <div class="info-list">
            <div class="info-item"><?= $user['nama'] ?></div>
            <div class="info-item"><?= $user['nim'] ?></div>
            <div class="info-item"><?= $user['prodi'] ?></div>
            <div class="info-item"><?= $user['jenjang'] ?></div>
            <div class="info-item"><?= $user['universitas'] ?></div>
        </div>

        <div class="flex-btn">
            <button class="btn-edit">Edit Profil</button>
            <button class="btn-save">Simpan</button>
        </div>
    </div>
</body>
</html>