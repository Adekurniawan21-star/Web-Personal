<?php 
// mengaktifkan session php
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman ke halaman login
$tujuan = 'login.php';
header("location:$tujuan");
?>