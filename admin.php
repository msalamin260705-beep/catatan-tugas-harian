<?php 
include 'koneksi.php';
if($_SESSION['role'] != 'admin') header("location: index.php");
$users = mysqli_query($conn, "SELECT * FROM users WHERE role = 'user'");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #800000; color: white; }
    </style>
</head>
<body>
    <h2>Panel Admin - Data Pendaftar</h2>
    <a href="logout.php">Logout</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>NIM</th>
            <th>Prodi</th>
        </tr>
        <?php while($u = mysqli_fetch_array($users)){ ?>
        <tr>
            <td><?php echo $u['id']; ?></td>
            <td><?php echo $u['nama_lengkap']; ?></td>
            <td><?php echo $u['username']; ?></td>
            <td><?php echo $u['nim']; ?></td>
            <td><?php echo $u['prodi']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>