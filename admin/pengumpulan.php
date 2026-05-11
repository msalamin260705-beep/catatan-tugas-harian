<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$data = mysqli_query($conn,

"SELECT pengumpulan.*,
users.nama,
tugas.judul

FROM pengumpulan

JOIN users
ON pengumpulan.user_id = users.id

JOIN tugas
ON pengumpulan.tugas_id = tugas.id");

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<h2>Data Pengumpulan Tugas</h2>

<table class="table table-bordered table-striped">

<tr>

<th>No</th>
<th>Mahasiswa</th>
<th>Tugas</th>
<th>File</th>

</tr>

<?php
$no = 1;

while($row =
mysqli_fetch_assoc($data)){
?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $row['nama']; ?></td>

<td><?php echo $row['judul']; ?></td>

<td>

<a target="_blank"
href="../uploads/<?php echo $row['file_tugas']; ?>"
class="btn btn-success btn-sm">

Lihat File

</a>

</td>

</tr>

<?php } ?>

</table>

<?php include 'layout/footer.php'; ?>