<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$id = $_SESSION['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM users
WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>

<head>

<title>Profile Pengguna</title>

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

Profile Pengguna

</h2>

<hr>

<table class="table table-bordered">

<tr>

<th width="30%">
Nama
</th>

<td>

<?php echo htmlspecialchars($data['nama']); ?>

</td>

</tr>

<tr>

<th>Email</th>

<td>

<?php echo htmlspecialchars($data['email']); ?>

</td>

</tr>

<?php if($data['role']=="user"){ ?>

<tr>

<th>NIM</th>

<td>

<?php echo htmlspecialchars($data['nim']); ?>

</td>

</tr>

<tr>

<th>Fakultas</th>

<td>

<?php echo htmlspecialchars($data['fakultas']); ?>

</td>

</tr>

<tr>

<th>Program Studi</th>

<td>

<?php echo htmlspecialchars($data['prodi']); ?>

</td>

</tr>

<tr>

<th>Semester</th>

<td>

Semester
<?php echo htmlspecialchars($data['semester']); ?>

</td>

</tr>

<tr>

<th>Kelas</th>

<td>

<?php echo htmlspecialchars($data['kelas']); ?>

</td>

</tr>

<?php } ?>

<tr>

<th>Role</th>

<td>

<?php echo htmlspecialchars($data['role']); ?>

</td>

</tr>

</table>

<div class="mt-3">

<a
href="dashboard.php"
class="btn btn-primary">

Kembali

</a>

</div>

</div>

</div>

</div>

</body>

</html>