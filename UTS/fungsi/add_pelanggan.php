<?php

include_once("../inc/config.php");
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat_lengkap = $_POST['alamat_lengkap'];
$no_hp= $_POST['no_hp'];
$email= $_POST['email'];
$paswords = $_POST["paswords"];



$result = mysqli_query($connection,"INSERT INTO pelanggan(nama_pelanggan,alamat_lengkap,no_hp,email,paswords)VALUES('$nama_pelanggan','$alamat_lengkap','$no_hp','$email','$paswords')");
if($result){
    echo "<script>
        document.location.href='../loginpelanggan.php'
        alert('Berhasil')
        </script>";
}else{
    echo "silakan mengulang kembali !";
}

?>