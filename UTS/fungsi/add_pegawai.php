<?php

include_once("../inc/config.php");
$nama_pegawai = $_POST['nama_pegawai'];
$alamat= $_POST['alamat'];
$jabatan= $_POST['jabatan'];
$email_pegawai= $_POST['email_pegawai'];
$paswords= $_POST['paswords'];



$result = mysqli_query($connection,"INSERT INTO pegawai(nama_pegawai,alamat,jabatan,email_pegawai,paswords)VALUES('$nama_pegawai','$alamat','$jabatan','$email_pegawai','$paswords')");
if($result){
    echo "<script>
        document.location.href='../addteknisi.php'
        alert('Berhasil ')
        </script>";
}else{
    echo "silakan mengulang kembali !";
}

?>