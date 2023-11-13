<?php

include_once ("../inc/config.php");
$id_sparepart = $_POST['id_sparepart'];
$jenis_barang= $_POST['jenis_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$kondisi_barang = $_POST['kondisi_barang'];

$data= mysqli_query($connection,"update sparepart set jenis_barang ='$jenis_barang ',jumlah_barang='$jumlah_barang',kondisi_barang='$kondisi_barang' where id_sparepart='$id_sparepart'");
if($data){
    header("Location: ../addsparepart.php");
}else{
    echo"Failded";

}

?>