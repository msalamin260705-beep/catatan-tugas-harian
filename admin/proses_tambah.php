<?php

include '../config/koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$deadline = $_POST['deadline'];

$query = mysqli_query($conn,
"INSERT INTO tugas
(judul,deskripsi,deadline)

VALUES

('$judul','$deskripsi','$deadline')");

if($query){

    header("Location: tugas.php");

}else{

    echo mysqli_error($conn);

}

?>