<?php

include '../config/koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$deadline = $_POST['deadline'];

$query = mysqli_query($conn,
"UPDATE tugas

SET

judul='$judul',
deskripsi='$deskripsi',
deadline='$deadline'

WHERE id='$id'");

if($query){

    header("Location: tugas.php");

}else{

    echo mysqli_error($conn);

}

?>