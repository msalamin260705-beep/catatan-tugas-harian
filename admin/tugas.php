<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$data = mysqli_query(
$conn,
"SELECT * FROM tugas ORDER BY id DESC"
);

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<div class="card shadow">

<div class="card-body">

<h2 class="mb-4">

Data Tugas

</h2>

<a
href="tambah_tugas.php"
class="btn btn-primary mb-3">

Tambah Tugas

</a>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>No</th>

<th>Judul</th>

<th>Mata Kuliah</th>

<th>Semester</th>

<th>Kelas</th>

<th>Deskripsi</th>

<th>Deadline</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

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

Semester
<?php echo htmlspecialchars($row['semester']); ?>

</td>

<td>

<?php echo htmlspecialchars($row['kelas']); ?>

</td>

<td>

<?php echo htmlspecialchars($row['deskripsi']); ?>

</td>

<td>

<?php echo htmlspecialchars($row['deadline']); ?>

</td>

<td>

<a
href="edit_tugas.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a
href="hapus_tugas.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

<?php include 'layout/footer.php'; ?>