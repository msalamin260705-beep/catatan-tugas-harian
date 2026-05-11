<?php

include '../middleware/auth.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>

    <title>Upload Tugas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h2>Upload Tugas</h2>

            <hr>

            <form action="proses_upload.php"
            method="POST"
            enctype="multipart/form-data">

                <input type="hidden"
                name="tugas_id"
                value="<?php echo $id; ?>">

                <div class="mb-3">

                    <label>File Tugas (PDF)</label>

                    <input type="file"
                    name="file_tugas"
                    class="form-control"
                    required>

                </div>

                <button type="submit"
                class="btn btn-success">

                    Upload

                </button>

                <a href="tugas.php"
                class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>