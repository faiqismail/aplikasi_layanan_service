<?php
include_once ("../inc/config.php");
$id_admin = $_GET['id'];

$data = mysqli_query($connection, "DELETE  FROM adminservise WHERE id_admin='$id_admin'");

if($data){
    header("Location: ../biaya_perbaikan.php");
}else{
    echo"Failed";
}
?>