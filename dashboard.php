<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tugas Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-mobile">
        <!-- Header Dashboard -->
        <div class="header-inline">
            <div class="menu-icon" onclick="toggleMenu()">☰</div>
            <p class="user-name"><?php echo $_SESSION['nama']; ?></p>
            <div class="profile-mini">
                <img src="https://i.ibb.co.com/kVvnCGtt/IMG-20260413-WA0001.jpg" alt="User">
            </div>
        </div>

        <div class="content">
            <h4>MATA KULIAH</h4>
            <div class="list-container">
                <?php
                
                $uid = $_SESSION['user_id'];
                
                $res = mysqli_query($conn, "SELECT * FROM mata_kuliah WHERE user_id='$uid'");
                
                if (mysqli_num_rows($res) > 0) {
                    while($row = mysqli_fetch_assoc($res)) {
                        // Kartu mata kuliah diarahkan ke tambah_tugas.php dengan membawa ID MK
                        echo "
                        <a href='tambah_tugas.php?mk_id={$row['id_mk']}' class='card-link'>
                            <div class='item-card'>
                                <div class='card-info'>
                                    <strong>{$row['nama_mk']}</strong>
                                    <p>Tugas tentang apa</p>
                                    <small>{$row['dosen']} | Semester {$row['semester']}</small>
                                </div>
                                <div class='card-arrow'>❯</div>
                            </div>
                        </a>";
                    }
                } else {
                    echo "<p class='empty-text'>Belum ada mata kuliah. Klik tombol + untuk menambah.</p>";
                }
                ?>
            </div>
        </div>
        
        <!-- Tombol Tambah Mata Kuliah (Floating Action Button) -->
        <a href="tambah_mk.php" class="fab">+</a>
    </div>

    <!-- Sidebar Menu (Hidden by Default) -->
    <div id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <img src="https://i.ibb.co.com/kVvnCGtt/IMG-20260413-WA0001.jpg" class="sidebar-logo">
            <p>Menu Navigasi</p>
        </div>
        <hr>
        <a href="profil.php">👤 Profil Pribadi</a>
        <a href="dashboard.php">📚 Daftar Mata Kuliah</a>
        <a href="logout.php" class="logout-link">🚪 Logout</a>
    </div>

    <div id="overlay" onclick="toggleMenu()"></div>

    <script>
        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }
    </script>
</body>
</html>