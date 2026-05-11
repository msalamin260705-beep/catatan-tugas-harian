<?php

include '../config/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn,
"DELETE FROM tugas
WHERE id='$id'");

if($query){

    header("Location: tugas.php");

}else{

    echo "Gagal hapus";

}

?>