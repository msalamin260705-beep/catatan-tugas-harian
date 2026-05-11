<?php

include 'middleware/auth.php';

?>

<!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h1>Selamat Datang</h1>

            <hr>

            <h3>
                <?php echo $_SESSION['nama']; ?>
            </h3>

            <h5>
                Role:
                <?php echo $_SESSION['role']; ?>
            </h5>

            <a href="logout.php"
            class="btn btn-danger mt-3">

                Logout

            </a>

        </div>

    </div>

</div>

</body>
</html>