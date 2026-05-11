<?php

session_start();

include '../config/koneksi.php';

$user_id = $_SESSION['id'];

$tugas_id = $_POST['tugas_id'];

$file = $_FILES['file_tugas']['name'];

$tmp = $_FILES['file_tugas']['tmp_name'];

$size = $_FILES['file_tugas']['size'];

$error = $_FILES['file_tugas']['error'];

$ekstensi = strtolower(
pathinfo($file,
PATHINFO_EXTENSION)
);

$allowed = ['pdf'];

if(!in_array($ekstensi,$allowed)){

    die("File harus PDF");

}

if($size > 2000000){

    die("Ukuran file maksimal 2MB");

}

if($error === 0){

    $namaBaru =
    uniqid().'.'.$ekstensi;

    move_uploaded_file(
    $tmp,
    "../uploads/".$namaBaru
    );

    $query = mysqli_query($conn,
    "INSERT INTO pengumpulan
    (user_id,tugas_id,file_tugas)

    VALUES

    ('$user_id',
    '$tugas_id',
    '$namaBaru')");

    if($query){

        echo "

        <script>

        alert('Tugas berhasil diupload');

        window.location='dashboard.php';

        </script>

        ";

    }else{

        echo mysqli_error($conn);

    }

}

?>