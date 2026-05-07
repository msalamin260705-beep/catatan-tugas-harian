<?php 
include 'koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: index.php");
$uid = $_SESSION['user_id'];

// Ambil data tugas
$tugas = mysqli_query($conn, "SELECT * FROM list_tugas WHERE user_id = '$uid'");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mobile-frame">
        <div style="display: flex; justify-content: space-between;">
            <a href="profil.php" style="color:white; text-decoration:none">☰ Profil</a>
            <span>Halo, <?php echo $_SESSION['nama']; ?></span>
        </div>
        
        <h3 style="margin-top:30px;">Tugas Kamu</h3>
        
        <?php while($row = mysqli_fetch_array($tugas)){ ?>
            <div class="task-item">
                <strong><?php echo $row['judul_tugas']; ?></strong><br>
                <small>Deadline: <?php echo $row['deadline']; ?></small>
            </div>
        <?php } ?>

        <a href="tambah_tugas.php" class="fab">+</a>
    </div>
</body>
</html>