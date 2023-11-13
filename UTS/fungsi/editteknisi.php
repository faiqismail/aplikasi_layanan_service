<?php

include_once ("../inc/config.php");
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat= $_POST['alamat'];
$jabatan= $_POST['jabatan'];
$email_pegawai= $_POST['email_pegawai'];
$paswords= $_POST['paswords'];

$data= mysqli_query($connection,"UPDATE pegawai SET nama_pegawai='$nama_pegawai', id_pegawai='$id_pegawai', alamat='$alamat',jabatan ='$jabatan',email_pegawai='$email_pegawai',paswords='$paswords' where id_pegawai='$id_pegawai'");
if($data){
    header("Location: ../addteknisi.php");
}else{
    echo"Failded";

}

?>