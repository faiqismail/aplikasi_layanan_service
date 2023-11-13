<?php

include_once ("../inc/config.php");
$id_pegawai = $_GET['id'];

$result = mysqli_query($connection,"delete from pegawai where id_pegawai='$id_pegawai'");
if($result){
    header("Location: ../addteknisi.php");
}else{
    echo"Failded";

}

?>