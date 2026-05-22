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

<div class="col-md-6">

<div class="card shadow mt-5">

<div class="card-body">

<h3 class="text-center mb-4">

Register

</h3>

<form
action="proses_register.php"
method="POST">

<div class="mb-3">

<label>Nama</label>

<input
type="text"
name="nama"
class="form-control"
required>

</div>


<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>


<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>


<div class="mb-3">

<label>Role</label>

<select
name="role"
id="role"
class="form-control"
required>

<option value="user">

Mahasiswa

</option>

<option value="admin">

Admin / Dosen

</option>

</select>

</div>


<div id="mahasiswaField">

<div class="mb-3">

<label>NIM</label>

<input
type="text"
name="nim"
class="form-control">

</div>


<div class="mb-3">

<label>Fakultas</label>

<input
type="text"
name="fakultas"
class="form-control">

</div>


<div class="mb-3">

<label>Program Studi</label>

<input
type="text"
name="prodi"
class="form-control">

</div>


<div class="mb-3">

<label>Semester</label>

<select
name="semester"
class="form-control">

<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>

</select>

</div>


<div class="mb-3">

<label>Kelas</label>

<select
name="kelas"
class="form-control">

<option>A</option>
<option>B</option>
<option>C</option>
<option>D</option>
<option>E</option>

</select>

</div>

</div>

<button
type="submit"
class="btn btn-success w-100">

Register

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<script>

let role =
document.getElementById("role");

let mahasiswaField =
document.getElementById(
"mahasiswaField"
);

role.addEventListener(
"change",
function(){

if(role.value=="admin"){

mahasiswaField.style.display="none";

}else{

mahasiswaField.style.display="block";

}

});

</script>

</body>

</html>