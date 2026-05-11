<?php

include '../middleware/auth.php';

if($_SESSION['role'] != 'admin'){

    header("Location: ../login.php");
    exit;

}

include '../config/koneksi.php';

$data = mysqli_query($conn,
"SELECT * FROM tugas");

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<h2>Data Tugas</h2>

<a href="tambah_tugas.php"
class="btn btn-primary mb-3">

Tambah Tugas

</a>

<table class="table table-bordered table-striped">

    <tr>

        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Deadline</th>
        <th>Aksi</th>

    </tr>

    <?php
    $no = 1;

    while($row =
    mysqli_fetch_assoc($data)){
    ?>

    <tr>

        <td><?php echo $no++; ?></td>

        <td>
            <?php echo $row['judul']; ?>
        </td>

        <td>
            <?php echo $row['deskripsi']; ?>
        </td>

        <td>
            <?php echo $row['deadline']; ?>
        </td>

        <td>

            <a href="edit_tugas.php?id=<?php echo $row['id']; ?>"
            class="btn btn-warning btn-sm">

                Edit

            </a>

            <a href="hapus_tugas.php?id=<?php echo $row['id']; ?>"
            class="btn btn-danger btn-sm">

                Hapus

            </a>

        </td>

    </tr>

    <?php } ?>

</table>

<?php include 'layout/footer.php'; ?>