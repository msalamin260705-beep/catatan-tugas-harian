<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$judul = trim($_POST['judul']);

$deskripsi = trim($_POST['deskripsi']);

$semester = trim($_POST['semester']);

$kelas = trim($_POST['kelas']);

$mata_kuliah = trim($_POST['mata_kuliah']);

$deadline = $_POST['deadline'];


/*
Validasi
*/

if(
empty($judul) ||
empty($semester) ||
empty($kelas) ||
empty($mata_kuliah) ||
empty($deadline)
){

    echo "

    <script>

    alert('Semua data wajib diisi');

    window.location='tambah_tugas.php';

    </script>

    ";

    exit;

}


/*
Simpan data
*/

$stmt = mysqli_prepare(

$conn,

"INSERT INTO tugas
(
judul,
deskripsi,
semester,
kelas,
mata_kuliah,
deadline
)

VALUES
(
?,
?,
?,
?,
?,
?
)"

);

mysqli_stmt_bind_param(

$stmt,

"ssssss",

$judul,
$deskripsi,
$semester,
$kelas,
$mata_kuliah,
$deadline

);

$query = mysqli_stmt_execute($stmt);

if($query){

    echo "

    <script>

    alert('Tugas berhasil ditambahkan');

    window.location='tugas.php';

    </script>

    ";

}else{

    echo "

    <script>

    alert('Gagal menambahkan tugas');

    window.history.back();

    </script>

    ";

}

mysqli_stmt_close($stmt);

mysqli_close($conn);

?>