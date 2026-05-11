<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <link rel="stylesheet"
href="assets/css/style.css">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow mt-5">

                <div class="card-body">

                    <h3 class="text-center mb-4">
                        Register
                    </h3>

                    <form action="proses_register.php"
                    method="POST">

                        <div class="mb-3">

                            <label>Nama</label>

                            <input type="text"
                            name="nama"
                            class="form-control"
                            required>

                        </div>

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

                        <div class="mb-3">

                            <label>Role</label>

                            <select name="role"
                            class="form-control">

                                <option value="user">
                                    User
                                </option>

                                <option value="admin">
                                    Admin
                                </option>

                            </select>

                        </div>

                        <button type="submit"
                        class="btn btn-success w-100">

                            Register

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>