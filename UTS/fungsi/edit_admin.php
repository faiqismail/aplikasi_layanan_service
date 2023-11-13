<?php

include_once ("../inc/config.php");
$id_admin1 = $_POST['id_admin1'];
$email_admin= $_POST['email_admin'];
$paswords= $_POST['paswords'];


$data= mysqli_query($connection,"update login_admin set email_admin ='$email_admin ',paswords='$paswords' where id_admin1='$id_admin1'");
if($data){
    header("Location: ../editakun.php");
}else{
    echo"Failded";

}

?>