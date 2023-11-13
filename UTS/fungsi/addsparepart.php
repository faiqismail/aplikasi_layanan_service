<?php

include_once("../inc/config.php");
$jenis_barang = $_POST['jenis_barang'];
$jumlah_barang= $_POST['jumlah_barang'];
$kondisi_barang= $_POST['kondisi_barang'];



$result = mysqli_query($connection,"INSERT INTO sparepart(jenis_barang,jumlah_barang,kondisi_barang)VALUES('$jenis_barang','$jumlah_barang','$kondisi_barang')");
if($result){
    echo "<script>
        document.location.href='../addsparepart.php'
        alert('Berhasil ')
        </script>";
}else{
    echo "silakan mengulang kembali !";
}

?>