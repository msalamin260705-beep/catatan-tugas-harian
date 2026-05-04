<?php
include 'koneksi.php';

$jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';

if ($jenis == 'identitas') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    $jenjang = mysqli_real_escape_string($conn, $_POST['jenjang']);
    $univ = mysqli_real_escape_string($conn, $_POST['universitas']);

    $sql = "INSERT INTO users (nama, nim, prodi, jenjang, universitas) 
            VALUES ('$nama', '$nim', '$prodi', '$jenjang', '$univ')";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['user_id'] = mysqli_insert_id($conn);
        $_SESSION['nama'] = $nama;
        header("Location: dashboard.php");
        exit(); 
    } else {
        echo "Error Identitas: " . mysqli_error($conn);
    }

} elseif ($jenis == 'matkul') {
    if(!isset($_SESSION['user_id'])) { die("Sesi habis, silakan isi identitas ulang."); }
    
    $user_id = $_SESSION['user_id'];
    $nama_mk = mysqli_real_escape_string($conn, $_POST['nama_mk']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $dosen = mysqli_real_escape_string($conn, $_POST['dosen']);

    $sql = "INSERT INTO mata_kuliah (user_id, nama_mk, semester, dosen) 
            VALUES ('$user_id', '$nama_mk', '$semester', '$dosen')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error Matkul: " . mysqli_error($conn);
    }
}
?>