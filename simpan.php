<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama    = $_POST['nama_mahasiswa'];
    $nim     = $_POST['nim'];
    $prodi   = $_POST['prodi'];
    $jenjang = $_POST['jenjang'];
    $asal    = $_POST['asal_universitas'];

    $query = "INSERT INTO mahasiswa (nama_mahasiswa, nim, prodi, jenjang, asal_universitas) 
              VALUES ('$nama', '$nim', '$prodi', '$jenjang', '$asal')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Berhasil Disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>