<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$id = $_SESSION['id'];

$user = mysqli_fetch_assoc(

mysqli_query(

$conn,

"SELECT * FROM users
WHERE id='$id'"

)

);

$tugas = mysqli_num_rows(

mysqli_query(

$conn,

"SELECT * FROM tugas
WHERE semester='".$user['semester']."'
AND kelas='".$user['kelas']."'"

)

);

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<h1 class="mb-4">

Dashboard Mahasiswa

</h1>

<div class="row g-4">

<!-- Total Tugas -->

<div class="col-lg-4 col-md-6">

<div class="card shadow h-100">

<div class="card-body">

<h5 class="mb-3">

Total Tugas

</h5>

<h1>

<?php echo $tugas; ?>

</h1>

</div>

</div>

</div>


<!-- Semester -->

<div class="col-lg-4 col-md-6">

<div class="card shadow h-100">

<div class="card-body">

<h5 class="mb-3">

Semester

</h5>

<h1>

<?php echo $user['semester']; ?>

</h1>

</div>

</div>

</div>


<!-- Kelas -->

<div class="col-lg-4 col-md-6">

<div class="card shadow h-100">

<div class="card-body">

<h5 class="mb-3">

Kelas

</h5>

<h1>

<?php echo $user['kelas']; ?>

</h1>

</div>

</div>

</div>

</div>


<hr class="my-4">

<div class="card shadow">

<div class="card-body">

<h4 class="mb-3">

Informasi Mahasiswa

</h4>

<table class="table">

<tr>

<th width="30%">

Nama

</th>

<td>

<?php echo $user['nama']; ?>

</td>

</tr>

<tr>

<th>

NIM

</th>

<td>

<?php echo $user['nim']; ?>

</td>

</tr>

<tr>

<th>

Fakultas

</th>

<td>

<?php echo $user['fakultas']; ?>

</td>

</tr>

<tr>

<th>

Program Studi

</th>

<td>

<?php echo $user['prodi']; ?>

</td>

</tr>

<tr>

<th>

Kelas

</th>

<td>

<?php echo $user['kelas']; ?>

</td>

</tr>

</table>

</div>

</div>

<?php include 'layout/footer.php'; ?>