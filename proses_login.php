<?php

session_start();

include 'config/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = mysqli_prepare($conn,
"SELECT * FROM users
WHERE email=?");

mysqli_stmt_bind_param(
$stmt,
"s",
$email
);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$data = mysqli_fetch_assoc($result);

if($data){

    if(password_verify(
    $password,
    $data['password']
    )){

        $_SESSION['id'] = $data['id'];

        $_SESSION['nama'] = $data['nama'];

        $_SESSION['role'] = $data['role'];

        if($data['role'] == 'admin'){

            header("Location: admin/dashboard.php");

        }else{

            header("Location: user/dashboard.php");

        }

    }else{

        echo "Password salah";

    }

}else{

    echo "Email tidak ditemukan";

}

?>