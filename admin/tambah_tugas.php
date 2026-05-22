<?php

include '../middleware/auth.php';

if($_SESSION['role'] != 'admin'){

    header("Location: ../login.php");
    exit;

}

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<div class="card shadow">

<div class="card-body">

<h2 class="mb-4">

Tambah Tugas

</h2>

<form
action="proses_tambah.php"
method="POST">

<div class="mb-3">

<label>Judul Tugas</label>

<input
type="text"
name="judul"
class="form-control"
required>

</div>


<div class="mb-3">

<label>Mata Kuliah</label>

<input
type="text"
name="mata_kuliah"
class="form-control"
required>

</div>


<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"
rows="4"></textarea>

</div>


<div class="mb-3">

<label>Semester</label>

<select
name="semester"
class="form-control"
required>

<option value="">
Pilih Semester
</option>

<option value="1">
Semester 1
</option>

<option value="2">
Semester 2
</option>

<option value="3">
Semester 3
</option>

<option value="4">
Semester 4
</option>

<option value="5">
Semester 5
</option>

<option value="6">
Semester 6
</option>

<option value="7">
Semester 7
</option>

<option value="8">
Semester 8
</option>

</select>

</div>


<div class="mb-3">

<label>Kelas</label>

<select
name="kelas"
class="form-control"
required>

<option value="">
Pilih Kelas
</option>

<option value="A">A</option>

<option value="B">B</option>

<option value="C">C</option>

<option value="D">D</option>

<option value="E">E</option>

</select>

</div>


<div class="mb-3">

<label>Deadline</label>

<input
type="date"
name="deadline"
class="form-control"
required>

</div>


<button
type="submit"
class="btn btn-primary">

Simpan Tugas

</button>

<a
href="tugas.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

<?php include 'layout/footer.php'; ?>