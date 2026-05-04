<?php include 'koneksi.php'; 
$uid = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='$uid'"));
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-mobile" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b);">
        <h3 class="text-center">Profil Pribadi</h3>
        <div class="profile-circle" style="width:100px; height:100px; background:white; border-radius:50%; margin: 20px auto; display:flex; align-items:center; justify-content:center;">
            <img src="https://i.ibb.co.com/kVvnCGtt/IMG-20260413-WA0001.jpg" style="width:80%; border-radius:50%;">
        </div>
        
        <div class="info-box">
            <p><strong><?php echo $user['nama']; ?></strong></p>
            <p><?php echo $user['nim']; ?></p>
            <p><?php echo $user['prodi']; ?></p>
            <p><?php echo $user['jenjang']; ?></p>
            <p><?php echo $user['universitas']; ?></p>
        </div>

        <div style="display:flex; gap:10px; margin-top:20px;">
            <button class="btn-simpan" style="background:#555; color:white;">Edit Profil</button>
            <button class="btn-simpan" onclick="window.location='dashboard.php'">Simpan</button>
        </div>
    </div>
</body>
</html>