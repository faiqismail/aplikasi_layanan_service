<?php

include_once ("../inc/config.php");
$id_sparepart = $_GET['id'];

$result = mysqli_query($connection,"delete from sparepart where id_sparepart='$id_sparepart'");
if($result){
    header("Location: ../addsparepart.php");
}else{
    echo"Failded";

}

?>