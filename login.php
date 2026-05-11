<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <link rel="stylesheet"
href="assets/css/style.css">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card shadow mt-5">

                <div class="card-body">

                    <h3 class="text-center mb-4">
                        Login Mahasiswa
                    </h3>

                    <form action="proses_login.php"
                    method="POST">

                        <div class="mb-3">

                            <label>Email</label>

                            <input type="email"
                            name="email"
                            class="form-control"
                            required>

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input type="password"
                            name="password"
                            class="form-control"
                            required>

                        </div>

                        <button type="submit"
                        class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                    <div class="text-center mt-3">

                        <a href="register.php">
                            Register
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>