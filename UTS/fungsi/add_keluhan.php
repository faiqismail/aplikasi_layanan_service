<?php 
date_default_timezone_set('ASIA/JAKARTA');
session_start();
include "../inc/config.php";
$id_pelanggan =  $_SESSION["id_pelanggan"];
$tgl_keluhan = date('Y-m-d');
$nama_perangkat =  $_POST["nama_perangkat"];
$merk =  $_POST["merk"];
$keluhan_kerusakan =  $_POST["keluhan_kerusakan"];
$file = $_FILES['file_kerusakan']['name'];
$ukuran = $_FILES['file_kerusakan']['size'];
$tipe = $_FILES['file_kerusakan']['type'];
$tmp_file = $_FILES['file_kerusakan']['tmp_name'];

$path ="../upload/".$file;

if($tipe == "image/jpeg" || $tipe == "image/png"){
    if($ukuran <= 100000){
      
      
       if(move_uploaded_file($tmp_file,$path)){

        $result = mysqli_query($connection,"INSERT INTO keluhan(id_pelanggan,tgl_keluhan,nama_perangkat,merk,keluhan_kerusakan,file_kerusakan)VALUES('$id_pelanggan','$tgl_keluhan','$nama_perangkat','$merk','$keluhan_kerusakan','$file')");
           if($result){
            echo "<script>
            document.location.href='../tabelkeluhan.php'
            alert('Berhasil Segera kami proses ')
            </script>";
            
           }else{
               echo "silakan mengulang kembali !";
           }
       }
       else{
           echo "upload failed";
       }
    }
    else{
       echo"ukuran";
    }
   }
   else{
       echo "tipe";
   }
?>