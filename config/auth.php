<?php
function require_auth($role_required) {
    // ✅ Pakai session name berbeda per role agar tidak saling menimpa
    $session_names = [
        'admin'     => 'sess_admin',
        'dosen'     => 'sess_dosen',
        'mahasiswa' => 'sess_mahasiswa',
    ];

    $session_name = $session_names[$role_required] ?? 'sess_default';
    session_name($session_name);

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $base = (isset($_SERVER['HTTP_HOST']) &&
            ($_SERVER['HTTP_HOST'] === 'localhost' ||
             str_ends_with($_SERVER['HTTP_HOST'], '.test')))
            ? '/tugas-app' : '';

    // Belum login → redirect ke login
    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
        session_destroy();
        header("Location: {$base}/index.php");
        exit();
    }

    // Role tidak sesuai → redirect ke dashboard yang benar
    if ($_SESSION['user_role'] !== $role_required) {
        $role = $_SESSION['user_role'];
        if ($role == 'admin') {
            header("Location: {$base}/pages/admin/dashboard.php");
        } elseif ($role == 'dosen') {
            header("Location: {$base}/pages/dosen/dashboard.php");
        } else {
            header("Location: {$base}/pages/mahasiswa/dashboard.php");
        }
        exit();
    }
}
?>