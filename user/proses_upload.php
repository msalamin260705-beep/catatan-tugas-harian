<?php

include '../middleware/auth.php';
include '../config/koneksi.php';

$user_id = $_SESSION['id'];

$tugas_id = $_POST['tugas_id'];

/*
Ambil data tugas
*/

$stmt = mysqli_prepare(
$conn,
"SELECT * FROM tugas
WHERE id=?"
);

mysqli_stmt_bind_param(
$stmt,
"i",
$tugas_id
);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$data_tugas = mysqli_fetch_assoc($result);

if(!$data_tugas){

    echo "

    <script>

    alert('Tugas tidak ditemukan');

    window.location='tugas.php';

    </script>

    ";

    exit;

}

/*
Cek deadline
*/

$hari_ini = date("Y-m-d");

if($hari_ini > $data_tugas['deadline']){

    echo "

    <script>

    alert('Batas pengumpulan tugas sudah berakhir');

    window.location='tugas.php';

    </script>

    ";

    exit;

}

/*
Cek apakah mahasiswa
sudah pernah upload
*/

$cek = mysqli_prepare(

$conn,

"SELECT * FROM pengumpulan
WHERE user_id=?
AND tugas_id=?"

);

mysqli_stmt_bind_param(
$cek,
"ii",
$user_id,
$tugas_id
);

mysqli_stmt_execute($cek);

$hasil = mysqli_stmt_get_result($cek);

if(mysqli_num_rows($hasil)>0){

    echo "

    <script>

    alert('Tugas sudah pernah dikumpulkan');

    window.location='tugas.php';

    </script>

    ";

    exit;

}

/*
Cek file
*/

if(empty($_FILES['file_tugas']['name'])){

    echo "

    <script>

    alert('Pilih file terlebih dahulu');

    window.location='tugas.php';

    </script>

    ";

    exit;

}

$file = $_FILES['file_tugas']['name'];

$tmp = $_FILES['file_tugas']['tmp_name'];

$ekstensi = strtolower(
pathinfo(
$file,
PATHINFO_EXTENSION
));

/*
Format yang diizinkan
*/

$allowed = [

'pdf',

'doc',
'docx',

'ppt',
'pptx',

'xls',
'xlsx',

'jpg',
'jpeg',
'png',

'zip',
'rar'

];

if(!in_array(
$ekstensi,
$allowed
)){

    echo "

    <script>

    alert(
    'Format file tidak didukung'
    );

    window.location='tugas.php';

    </script>

    ";

    exit;

}

/*
Nama file unik
*/

$namaBaru =
time().'_'.
rand(100,999).'_'.
$file;

/*
Upload file
*/

$upload = move_uploaded_file(

$tmp,

"../uploads/".$namaBaru

);

if($upload){

    $insert = mysqli_prepare(

    $conn,

    "INSERT INTO pengumpulan
    (
    user_id,
    tugas_id,
    file_tugas
    )

    VALUES
    (
    ?,
    ?,
    ?
    )"

    );

    mysqli_stmt_bind_param(

    $insert,

    "iis",

    $user_id,
    $tugas_id,
    $namaBaru

    );

    mysqli_stmt_execute(
    $insert
    );

    echo "

    <script>

    alert(
    'Tugas berhasil dikumpulkan'
    );

    window.location='dashboard.php';

    </script>

    ";

}else{

    echo "

    <script>

    alert(
    'Upload gagal'
    );

    window.location='tugas.php';

    </script>

    ";

}

?>