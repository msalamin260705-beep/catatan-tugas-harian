<?php

include '../middleware/auth.php';

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<h2>Tambah Tugas</h2>

<form action="proses_tambah.php"
method="POST">

    <div class="mb-3">

        <label>Judul Tugas</label>

        <input type="text"
        name="judul"
        class="form-control"
        required>

    </div>

    <div class="mb-3">

        <label>Deskripsi</label>

        <textarea
        name="deskripsi"
        class="form-control"></textarea>

    </div>

    <div class="mb-3">

        <label>Deadline</label>

        <input type="date"
        name="deadline"
        class="form-control"
        required>

    </div>

    <button type="submit"
    class="btn btn-success">

        Simpan

    </button>

</form>

<?php include 'layout/footer.php'; ?>