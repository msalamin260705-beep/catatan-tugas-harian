<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

// kosongkan semua data session
$_SESSION = [];

// hapus session
session_destroy();

// redirect ke login
header("Location: login.php");
exit;

?>