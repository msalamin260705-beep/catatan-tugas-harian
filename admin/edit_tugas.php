<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM tugas
WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<h2>Edit Tugas</h2>

<form action="proses_edit.php"
method="POST">

<input type="hidden"
name="id"
value="<?php echo $row['id']; ?>">

<div class="mb-3">

<label>Judul</label>

<input type="text"
name="judul"
class="form-control"
value="<?php echo $row['judul']; ?>"
required>

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"><?php echo $row['deskripsi']; ?></textarea>

</div>

<div class="mb-3">

<label>Deadline</label>

<input type="date"
name="deadline"
class="form-control"
value="<?php echo $row['deadline']; ?>"
required>

</div>

<button class="btn btn-primary">

Update

</button>

</form>

<?php include 'layout/footer.php'; ?>