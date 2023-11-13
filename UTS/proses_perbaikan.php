<?php
include_once "inc/config.php";
$datapelanggan = mysqli_query($connection, "SELECT * FROM pelanggan ");
$datakeluhan = mysqli_query($connection, " SELECT * FROM keluhan");
$datapegawai = mysqli_query($connection, " SELECT * FROM pegawai");
$dataadminservise = mysqli_query($connection, " SELECT * FROM adminservise");

$data = mysqli_query($connection,"SELECT *
FROM perbaikan
INNER JOIN pelanggan ON perbaikan.id_pelanggan = pelanggan.id_pelanggan
INNER JOIN keluhan ON perbaikan.id_keluhan = keluhan.id_keluhan 
INNER JOIN pegawai ON perbaikan.id_pegawai = pegawai.id_pegawai
INNER JOIN adminservise ON perbaikan.id_admin = adminservise.id_admin");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES PERBAIKAN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
 <body style="background-color:powderblue;">
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="foto/logo.webp"  alt="logo" width="105">
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav"> 
        <li ><a href="homeadmin.php">Home</a></li>
          <li ><a href="perbaikan.php">Keluhan</a></li>
          <li ><a href="biaya_perbaikan.php">Biaya_Perbaikan</a></li>
          <li class="active" ><a href="proses_perbaikan.php">Proses_Perbaikan</a></li>
          <li ><a href="addteknisi.php">ADD_Teknisi</a></li>
          <li ><a href="addsparepart.php">sparepart</a></li>
          <li ><a href="editakun.php">Edit_akun</a></li>
          <li ><a href="login.php">logout</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>
  <div class="container"  style=" text-align: center;">

<div class="row text-center" style=" text-align: center;">

 <button type="button" class="btn btn-success" onclick="window.location.href='b_proses_perbaikan.php'"style="text-align: center;  justify-content: ">

&nbsp;Masukkan Data
</button>&nbsp;&nbsp;&nbsp;

</div>
</div><br>

 


 

</table>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <?php $no=1;?>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Perangkat</th>
                <th scope="col">tgl_perbaikan</th>
                <th scope="col">pegawai</th>
                <th scope="col">status</th>
                <th scope="col"></th>
                <th scope="col"></th>
               
                </tr>
            </thead>
            <tbody>
               <?php 
               include_once "inc/config.php";
               $data = mysqli_query($connection,"SELECT *
               FROM perbaikan
               INNER JOIN pelanggan ON perbaikan.id_pelanggan = pelanggan.id_pelanggan
               INNER JOIN keluhan ON perbaikan.id_keluhan = keluhan.id_keluhan 
               INNER JOIN pegawai ON perbaikan.id_pegawai = pegawai.id_pegawai
               INNER JOIN adminservise ON perbaikan.id_admin = adminservise.id_admin");
               
               
               foreach($data as $item_perbaikan): ?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $item_perbaikan['nama_pelanggan'] ?></td>
                    <td><?= $item_perbaikan['nama_perangkat'] ?></td>
                    <td><?= $item_perbaikan['tgl_perbaikan'] ?></td>
                    <td><?= $item_perbaikan['nama_pegawai'] ?></td>
                    <td><?= $item_perbaikan['status'] ?></td>
                    <td>
                        <a href="edit_prosesperbaikan.php?id=<?= $item_perbaikan['id_perbaikan'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       
                    </td>
                    <td> <a href="fungsi/deleteprosesperbaikan.php?id=<?= $item_perbaikan['id_perbaikan'] ?>" class="btn btn-sm btn-danger">delete</a></td>
                </tr>
                </tr>
               <?php endforeach ?>
            </tbody>
        </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br><br><br><br><b><b></b></b>
  </body>
</html>