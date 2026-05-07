<?php 
include 'koneksi.php';
if(isset($_POST['daftar'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['nama'];
    mysqli_query($conn, "INSERT INTO users (nama_lengkap, username, password) VALUES ('$nama', '$user', '$pass')");
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="mobile-frame">
        <h3>Buat Akun Anda</h3>
        <div class="card">
            <form method="POST">
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="daftar" class="btn-maroon">DAFTAR</button>
            </form>
        </div>
    </div>
</body>
</html>