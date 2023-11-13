<?php
include_once("../inc/config.php");

$id_perbaikan = $_POST['id_perbaikan'];
$status= $_POST['status'];

$data = mysqli_query($connection,"UPDATE  perbaikan SET status='$status' WHERE id_perbaikan = '$id_perbaikan' ");

if($data){
    header("Location: ../tugaskerja.php");
}else{
    echo "failed";
}

?>