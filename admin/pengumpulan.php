<?php

include '../middleware/auth.php';

if($_SESSION['role'] != 'admin'){

    header("Location: ../login.php");
    exit;

}

include '../config/koneksi.php';

$data = mysqli_query(

$conn,

"SELECT

pengumpulan.*,

users.nama,
users.nim,
users.semester,
users.kelas,
users.prodi,

tugas.judul,
tugas.mata_kuliah

FROM pengumpulan

JOIN users
ON pengumpulan.user_id = users.id

JOIN tugas
ON pengumpulan.tugas_id = tugas.id

ORDER BY pengumpulan.id DESC"

);

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<div class="card shadow">

<div class="card-body">

<h2 class="mb-4">

Data Pengumpulan Tugas

</h2>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>No</th>
<th>Mahasiswa</th>
<th>NIM</th>
<th>Semester</th>
<th>Kelas</th>
<th>Jurusan</th>
<th>Mata Kuliah</th>
<th>Tanggal Pengumpulan</th>
<th>File</th>
<th>Status</th>

</tr>

</thead>

<tbody>

<?php

$no = 1;

while(
$row = mysqli_fetch_assoc($data)
){

$file = "../uploads/" . ($row['file_tugas'] ?? '');

?>

<tr>

<td>

<?php echo $no++; ?>

</td>

<td>

<?php echo htmlspecialchars($row['nama'] ?? '-'); ?>

</td>

<td>

<?php echo htmlspecialchars($row['nim'] ?? '-'); ?>

</td>

<td>

Semester
<?php echo htmlspecialchars($row['semester'] ?? '-'); ?>

</td>

<td>

<?php echo htmlspecialchars($row['kelas'] ?? '-'); ?>

</td>

<td>

<?php echo htmlspecialchars($row['prodi'] ?? '-'); ?>

</td>

<td>

<?php echo htmlspecialchars($row['mata_kuliah'] ?? '-'); ?>

</td>

<td>

<?php echo htmlspecialchars($row['tanggal_pengumpulan'] ?? '-'); ?>

</td>

<td>

<?php

if(
isset($row['file_tugas']) &&
!empty($row['file_tugas']) &&
file_exists($file)
){

?>

<a
href="<?php echo $file; ?>"
target="_blank"
class="btn btn-success btn-sm">

Lihat File

</a>

<?php

}else{

?>

<button
class="btn btn-secondary btn-sm"
disabled>

Tidak Ada File

</button>

<?php } ?>

</td>

<td>

<?php

if(
isset($row['file_tugas']) &&
!empty($row['file_tugas']) &&
file_exists($file)
){

echo "

<span class='badge bg-success'>

Tersedia

</span>

";

}else{

echo "

<span class='badge bg-danger'>

Tidak ditemukan

</span>

";

}

?>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

<?php include 'layout/footer.php'; ?>