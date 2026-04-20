<?php
include 'koneksi.php';

// Cek apakah ada data yang dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis = $_POST['jenis_form'];

    if ($jenis == "mhs") {
        // Proses simpan Identitas Mahasiswa
        $nama    = $_POST['nama'];
        $nim     = $_POST['nim'];
        $prodi   = $_POST['prodi'];
        $jenjang = $_POST['jenjang'];
        $univ    = $_POST['univ'];

        $sql = "INSERT INTO mahasiswa (nama, nim, prodi, jenjang, universitas) 
                VALUES ('$nama', '$nim', '$prodi', '$jenjang', '$univ')";

    } else if ($jenis == "tgs") {
        // Proses simpan Tugas Mata Kuliah
        $matkul    = $_POST['matkul'];
        $tugas_ke  = $_POST['tugas_ke'];
        $deskripsi = $_POST['deskripsi'];
        $tgl_awal  = $_POST['tgl_mulai'];
        $tgl_akhir = $_POST['tgl_selesai'];
        $status    = $_POST['status'];

        $sql = "INSERT INTO tugas (matakuliah, tugas_ke, deskripsi, tgl_mulai, tgl_selesai, status) 
                VALUES ('$matkul', '$tugas_ke', '$deskripsi', '$tgl_awal', '$tgl_akhir', '$status')";
    }

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data Berhasil Disimpan ke Database!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($conn);
    }
}
?>