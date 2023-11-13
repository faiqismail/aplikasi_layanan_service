<?php
include_once("../inc/config.php");
$id_pelanggan = $_POST['id_pelanggan'];
$id_keluhan = $_POST['id_keluhan'];
$tgl_perbaikan = $_POST['tgl_perbaikan'];
$id_sparepart = $_POST['id_sparepart'];
$biaya_lain = $_POST['biaya_lain'];
$total_biaya = $_POST['total_biaya'];
$data = mysqli_query($connection,"INSERT INTO adminservise (id_pelanggan,id_keluhan,tgl_perbaikan,id_sparepart,biaya_lain,total_biaya)VALUES('$id_pelanggan','$id_keluhan','$tgl_perbaikan','$id_sparepart','$biaya_lain','$total_biaya')");
if($data){
    header("Location: ../biaya_perbaikan.php");
}else{
    echo "silakan mengulang kembali !";
}

?>