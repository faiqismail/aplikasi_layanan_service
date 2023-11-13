<?php
session_start();

$_SESSION["id_pelanggan"]='';
$_SESSION["nama_pelanggan"]='';
$_SESSION["alamat_lengkap"]='';
$_SESSION["no_hp"]='';
$_SESSION["email"]='';


unset($_SESSION["id_pelanggan"]);
unset($_SESSION["nama_pelanggan"]);
unset($_SESSION["alamat_lengkap"]);
unset($_SESSION["no_hp"]);
unset($_SESSION["email"]);



session_unset();
session_destroy();
header('Location: ../loginpelanggan.php')
?>