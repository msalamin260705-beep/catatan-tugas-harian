<?php

include 'config/koneksi.php';
include 'helper/function.php';

$nama = filter($_POST['nama']);
$email = filter($_POST['email']);

$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$role = $_POST['role'];

$query = mysqli_query($conn,
"INSERT INTO users
(nama,email,password,role)

VALUES

('$nama',
'$email',
'$password',
'$role')");

if($query){

    header("Location: login.php");

}else{

    echo mysqli_error($conn);

}

?>