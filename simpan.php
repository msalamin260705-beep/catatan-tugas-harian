<?php
include 'koneksi.php';

$jenis = $_GET['jenis'];

if ($jenis == 'identitas') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $jenjang = $_POST['jenjang'];
    $univ = $_POST['universitas'];
    
    mysqli_query($conn, "INSERT INTO identitas (nama, nim, prodi, jenjang, universitas) VALUES ('$nama', '$nim', '$prodi', '$jenjang', '$univ')");
    header("Location: index.php");

} elseif ($jenis == 'tambah_mk') {
    $mk = $_POST['matakuliah'];
    $smstr = $_POST['semester'];
    $dosen = $_POST['dosen'];
    
    mysqli_query($conn, "INSERT INTO matakuliah (nama_mk, semester, dosen) VALUES ('$mk', '$smstr', '$dosen')");
    header("Location: index.php");

} elseif ($jenis == 'tambah_tugas') {
    $id_mk = $_POST['id_mk'];
    $judul = $_POST['judul'];
    $tgl_p = $_POST['tgl_pemberian'];
    $tgl_d = $_POST['tgl_deadline'];
    
    mysqli_query($conn, "INSERT INTO tugas (id_mk, judul_tugas, tgl_pemberian, tgl_pengumpulan) VALUES ('$id_mk', '$judul', '$tgl_p', '$tgl_d')");
    header("Location: index.php");
}
?>