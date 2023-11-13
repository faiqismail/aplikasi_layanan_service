<?php
include_once ("../inc/config.php");
$id_perbaikan= $_GET['id'];

$data = mysqli_query($connection, "DELETE  FROM perbaikan WHERE id_perbaikan='$id_perbaikan'");

if($data){
    header("Location: ../proses_perbaikan.php");
}else{
    echo"Failed";
}
?>