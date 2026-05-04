<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Tugas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="card-mobile">
        <nav class="navbar">
            <i class="fas fa-bars" onclick="toggleMenu()"></i>
            <span>Dashboard</span>
            <a href="tambah_mk.php"><i class="fas fa-plus-circle"></i></a>
        </nav>

        <!-- Sidebar Menu -->
        <div id="sideMenu" class="side-menu">
            <a href="#" onclick="toggleMenu()">&times;</a>
            <a href="profil.php">Profil</a>
            <a href="index.php">Daftar Tugas</a>
        </div>

        <div class="content">
            <?php
            $q = mysqli_query($conn, "SELECT mk.*, t.judul_tugas, t.tgl_pengumpulan 
                                      FROM matakuliah mk 
                                      LEFT JOIN tugas t ON mk.id_mk = t.id_mk");
            while($row = mysqli_fetch_assoc($q)): 
                $status = "Belum Selesai";
                $color = "blue";
                if($row['tgl_pengumpulan'] && date('Y-m-d') > $row['tgl_pengumpulan']) {
                    $status = "Selesai";
                    $color = "green";
                }
            ?>
            <div class="task-card" onclick="location.href='tambah_tugas.php?id=<?= $row['id_mk'] ?>'">
                <div class="task-header"><?= $row['nama_mk'] ?></div>
                <p>Dosen: <?= $row['dosen'] ?></p>
                <p>Tugas: <?= $row['judul_tugas'] ?? '-' ?></p>
                <span class="badge <?= $color ?>"><?= $status ?></span>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>
</body>
</html>