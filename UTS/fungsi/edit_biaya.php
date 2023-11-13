<?php
include_once("../inc/config.php");

$id_admin = $_POST['id_admin'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_keluhan = $_POST['id_keluhan'];
$tgl_perbaikan = $_POST['tgl_perbaikan'];
$id_sparepart = $_POST['id_sparepart'];
$biaya_lain = $_POST['biaya_lain'];
$total_biaya = $_POST['total_biaya'];

$data = mysqli_query($connection,"UPDATE  adminservise SET id_pelanggan='$id_pelanggan',id_keluhan= '$id_keluhan',tgl_perbaikan ='$tgl_perbaikan ',id_sparepart = '$id_sparepart',biaya_lain='$biaya_lain',total_biaya='$total_biaya' WHERE id_admin = '$id_admin' ");

if($data){
    header("Location: ../biaya_perbaikan.php");
}else{
    echo "failed";
}

?>