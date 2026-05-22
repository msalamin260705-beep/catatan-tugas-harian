<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$user_id = $_SESSION['id'];

/*
Ambil data mahasiswa
*/

$user = mysqli_query(

$conn,

"SELECT
semester,
kelas
FROM users
WHERE id='$user_id'"

);

$userData = mysqli_fetch_assoc($user);

/*
Ambil tugas sesuai semester & kelas
*/

$data = mysqli_query(

$conn,

"SELECT *
FROM tugas

WHERE
semester='".$userData['semester']."'
AND
kelas='".$userData['kelas']."'

ORDER BY id DESC"

);

?>

<!DOCTYPE html>

<html>

<head>

<title>Daftar Tugas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-body">

<h2 class="mb-4">

Daftar Tugas Mahasiswa

</h2>

<table
class="table table-bordered table-striped">

<tr>

<th>No</th>

<th>Judul</th>

<th>Mata Kuliah</th>

<th>Deskripsi</th>

<th>Semester</th>

<th>Kelas</th>

<th>Deadline</th>

<th>Aksi</th>

</tr>

<?php

$no=1;

while(
$row=mysqli_fetch_assoc($data)
){

?>

<tr>

<td>

<?php echo $no++; ?>

</td>

<td>

<?php echo htmlspecialchars($row['judul']); ?>

</td>

<td>

<?php echo htmlspecialchars($row['mata_kuliah']); ?>

</td>

<td>

<?php echo htmlspecialchars($row['deskripsi']); ?>

</td>

<td>

Semester
<?php echo htmlspecialchars($row['semester']); ?>

</td>

<td>

<?php echo htmlspecialchars($row['kelas']); ?>

</td>

<td>

<?php echo htmlspecialchars($row['deadline']); ?>

<br>

<?php

if(
date("Y-m-d")
>
$row['deadline']
){

?>

<span class="badge bg-danger">

Deadline Berakhir

</span>

<?php

}else{

?>

<span class="badge bg-success">

Masih Dibuka

</span>

<?php } ?>

</td>

<td>

<?php

if(
date("Y-m-d")
<=
$row['deadline']
){

?>

<a
href="upload_tugas.php?id=<?php echo $row['id'];?>"
class="btn btn-primary btn-sm">

Upload

</a>

<?php

}else{

?>

<button
class="btn btn-secondary btn-sm"
disabled>

Ditutup

</button>

<?php } ?>

</td>

</tr>

<?php } ?>

</table>

<a
href="dashboard.php"
class="btn btn-secondary">

Kembali

</a>

</div>

</div>

</div>

</body>

</html>