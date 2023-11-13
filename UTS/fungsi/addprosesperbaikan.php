<?php
include_once("../inc/config.php");
$id_pelanggan = $_POST['id_pelanggan'];
$id_admin = $_POST['id_admin'];
$id_keluhan = $_POST['id_keluhan'];
$id_pegawai = $_POST['id_pegawai'];
$status = $_POST['status'];



$data = mysqli_query($connection,"INSERT INTO perbaikan (id_pelanggan,id_admin,id_pegawai,id_keluhan,status)VALUES('$id_pelanggan','$id_admin','$id_pegawai','$id_keluhan ','$status')");
if($data){
    header("Location: ../proses_perbaikan.php");
}else{
    echo "silakan mengulang kembali !";
}

?>