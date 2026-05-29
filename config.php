<?php
$db_host = 'localhost';
$db_name = 'if0_42043315_sppg';
$db_user = 'if0_42043315';
$db_pass = 'Kapandayan123!';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) { die('Koneksi Gagal: ' . mysqli_connect_error()); }
session_start();
define('BASE_URL', 'https://if0_42043315.infinityfreeapp.com/');
?>