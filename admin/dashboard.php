<?php

include '../middleware/auth.php';

if($_SESSION['role'] != 'admin'){

    header("Location: ../login.php");
    exit;

}

include '../config/koneksi.php';

$tugas = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM tugas")
);

$user = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM users
WHERE role='user'")
);

$pengumpulan = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM pengumpulan")
);

include 'layout/header.php';
include 'layout/sidebar.php';

?>

<h2 class="mb-4">
    Dashboard Admin
</h2>

<div class="row">

    <div class="col-md-4">

        <div class="card shadow border-0">

            <div class="card-body">

                <h5>Total Tugas</h5>

                <h1>
                    <?php echo $tugas; ?>
                </h1>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0">

            <div class="card-body">

                <h5>Total Mahasiswa</h5>

                <h1>
                    <?php echo $user; ?>
                </h1>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0">

            <div class="card-body">

                <h5>Pengumpulan</h5>

                <h1>
                    <?php echo $pengumpulan; ?>
                </h1>

            </div>

        </div>

    </div>

</div>

<?php include 'layout/footer.php'; ?>