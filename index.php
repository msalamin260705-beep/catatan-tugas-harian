<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Tugas Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border: none; border-radius: 15px; }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-4">Catatan Tugas Harian</h2>
    
    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0">Identitas Diri</h5>
                </div>
                <div class="card-body">
                    <form action="simpan.php" method="POST">
                        <input type="hidden" name="jenis_form" value="mhs">
                        <div class="mb-3">
                            <label class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prodi</label>
                            <input type="text" name="prodi" class="form-control" placeholder="Program Studi" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pilihan Jenjang</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenjang" value="S1" checked> <label>S1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenjang" value="S2"> <label>S2</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Asal Universitas</label>
                            <input type="text" name="univ" class="form-control" placeholder="Nama Kampus" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Klik Masuk</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white text-center">
                    <h5 class="mb-0">Tambah Mata Kuliah</h5>
                </div>
                <div class="card-body">
                    <form action="simpan.php" method="POST">
                        <input type="hidden" name="jenis_form" value="tgs">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label class="form-label">Mata Kuliah</label>
                                <input type="text" name="matkul" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tugas Ke-</label>
                                <input type="number" name="tugas_ke" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tentang Apa?</label>
                            <textarea name="deskripsi" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label">Mulai Tanggal</label>
                                <input type="date" name="tgl_mulai" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Sampai Tanggal</label>
                                <input type="date" name="tgl_selesai" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Tugas</label>
                            <select name="status" class="form-select">
                                <option value="tuntas">Tuntas</option>
                                <option value="gagal">Gagal</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Klik Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>