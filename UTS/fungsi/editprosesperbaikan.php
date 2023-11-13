<?php
include_once("../inc/config.php");

$id_perbaikan = $_POST['id_perbaikan'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_keluhan = $_POST['id_keluhan'];
$id_pegawai = $_POST['id_pegawai'];
$id_admin = $_POST['id_admin'];
$status= $_POST['status'];

$data = mysqli_query($connection,"UPDATE  perbaikan SET id_keluhan='$id_keluhan',id_pelanggan='$id_pelanggan ',id_pegawai='$id_pegawai',id_admin='$id_admin',status='$status'WHERE id_perbaikan = '$id_perbaikan' ");

if($data){
    header("Location: ../proses_perbaikan.php");
}else{
    echo "failed";
}

?>