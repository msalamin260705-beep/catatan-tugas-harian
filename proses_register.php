<?php

include 'config/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];

$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$role = $_POST['role'];

if($role == 'admin'){

    $nim = NULL;
    $fakultas = NULL;
    $prodi = NULL;
    $semester = NULL;
    $kelas = NULL;

}else{

    $nim = $_POST['nim'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $semester = (int)$_POST['semester'];
    $kelas = $_POST['kelas'];

}

$stmt = mysqli_prepare(

$conn,

"INSERT INTO users
(
nama,
email,
password,
nim,
fakultas,
prodi,
semester,
kelas,
role
)

VALUES
(
?,
?,
?,
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

"ssssssiss",

$nama,
$email,
$password,
$nim,
$fakultas,
$prodi,
$semester,
$kelas,
$role

);

$execute = mysqli_stmt_execute($stmt);

if($execute){

    header("Location: login.php");
    exit;

}else{

    echo "Register gagal";

}

mysqli_stmt_close($stmt);

?>