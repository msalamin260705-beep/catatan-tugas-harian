<?php

include '../middleware/auth.php';

if($_SESSION['role'] != 'user'){

    header("Location: ../login.php");
    exit;

}

include '../config/koneksi.php';

$today = date('Y-m-d');

$tugas = mysqli_query($conn,
"SELECT * FROM tugas
WHERE deadline >= '$today'
ORDER BY deadline ASC
LIMIT 3");

?>

<!DOCTYPE html>
<html>
<head>

    <title>Dashboard User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h2>Dashboard Mahasiswa</h2>

            <hr>

            <h4>

                Selamat datang,

                <?php echo $_SESSION['nama']; ?>

            </h4>

            <p>
                Role:
                <?php echo $_SESSION['role']; ?>
            </p>

            <a href="tugas.php"
            class="btn btn-primary">

                Lihat Tugas

            </a>

            <a href="profile.php"
            class="btn btn-success">

                Profile

            </a>

            <a href="../logout.php"
            class="btn btn-danger">

                Logout

            </a>

        </div>

    </div>

    <div class="card mt-4 shadow">

        <div class="card-body">

            <h4>Deadline Terdekat</h4>

            <ul>

            <?php while($row =
            mysqli_fetch_assoc($tugas)){ ?>

                <li>

                    <?php echo $row['judul']; ?>

                    -

                    <?php echo $row['deadline']; ?>

                </li>

            <?php } ?>

            </ul>

        </div>

    </div>

</div>

</body>
</html>