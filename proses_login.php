<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

include 'config/koneksi.php';

$email = trim($_POST['email']);
$password = $_POST['password'];

$stmt = mysqli_prepare(
$conn,
"SELECT * FROM users WHERE email=?"
);

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

        session_regenerate_id(true);

        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];

        if($data['role']=="admin"){

            header(
            "Location: /aplikasi-tugas/admin/dashboard.php"
            );

        }else{

            header(
            "Location: /aplikasi-tugas/user/dashboard.php"
            );

        }

        exit;

    }else{

        echo "<script>
        alert('Password salah');
        window.location='login.php';
        </script>";

    }

}else{

    echo "<script>
    alert('Email tidak ditemukan');
    window.location='login.php';
    </script>";

}
?>