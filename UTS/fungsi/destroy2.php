<?php
session_start();

$_SESSION["id_pegawai"]='';
$_SESSION["nama_pegawai"]='';
$_SESSION["alamat"]='';
$_SESSION["jabatan"]='';
$_SESSION["email_pegawai"]='';


unset($_SESSION["id_pegawai"]);
unset($_SESSION["nama_pegawai"]);
unset($_SESSION["alamat"]);
unset($_SESSION["jabatan"]);
unset($_SESSION["email_pegawai"]);



session_unset();
session_destroy();
header('Location: ../loginteknisi.php')
?>