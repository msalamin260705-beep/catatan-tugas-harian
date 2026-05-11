<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$data = mysqli_query($conn,
"SELECT * FROM tugas");

?>

<!DOCTYPE html>
<html>
<head>

    <title>Tugas Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h2>Daftar Tugas</h2>

            <hr>

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

                        <a href="upload_tugas.php?id=<?php echo $row['id']; ?>"
                        class="btn btn-primary btn-sm">

                            Upload Tugas

                        </a>

                    </td>

                </tr>

                <?php } ?>

            </table>

            <a href="dashboard.php"
            class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </div>

</div>

</body>
</html>