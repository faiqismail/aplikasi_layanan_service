
<?php
include_once "inc/config.php";
$datapelanggan = mysqli_query($connection, "SELECT * FROM pelanggan ");
$datakeluhan = mysqli_query($connection, " SELECT * FROM keluhan");
$datasparepart = mysqli_query($connection, " SELECT * FROM sparepart");

$data = mysqli_query($connection,"SELECT *
FROM adminservise 
INNER JOIN pelanggan ON adminservise.id_pelanggan = pelanggan.id_pelanggan
INNER JOIN keluhan ON adminservise.id_keluhan = keluhan.id_keluhan 
INNER JOIN sparepart ON adminservise.id_sparepart= sparepart.id_sparepart ");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biaya Perbaikan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <body >
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
          <li><a href="homeadmin.php">Home</a></li>
          <li ><a href="perbaikan.php">Keluhan</a></li>
          <li  class="active"><a href="biaya_perbaikan.php">Biaya_Perbaikan</a></li>
          <li ><a href="proses_perbaikan.php">Proses_Perbaikan</a></li>
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

 <button type="button" class="btn btn-success" onclick="window.location.href='databiayaperbaikan.php'"style="text-align: center;  justify-content: ">

&nbsp;Masukkan Data
</button>&nbsp;&nbsp;&nbsp;


</div>
</div><br><br>
        
 


</table>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <?php $no=1;?>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Keluhan</th>
                <th scope="col">TGL Perbaikan</th>
                <th scope="col">Jenis_sparepart</th>
                <th scope="col">biaya_lain</th>
                <th scope="col">Total biaya</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
               <?php 
               include_once "inc/config.php";


               $data = mysqli_query($connection,"SELECT *
               FROM adminservise 
               INNER JOIN pelanggan ON adminservise.id_pelanggan = pelanggan.id_pelanggan
               INNER JOIN keluhan ON adminservise.id_keluhan = keluhan.id_keluhan 
               INNER JOIN sparepart ON adminservise.id_sparepart= sparepart.id_sparepart ");
               
               foreach($data as $item): ?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $item['nama_pelanggan'] ?></td>
                    <td><?= $item['keluhan_kerusakan'] ?></td>
                    <td><?= $item['tgl_perbaikan'] ?></td>
                    <td><?= $item['jenis_barang'] ?></td>
                    <td><?= $item['biaya_lain'] ?></td>
                    <td><?= $item['total_biaya'] ?></td>
                    
                    <td>
                        <a href="edit_biaya.php?id=<?= $item['id_admin'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       
                    </td>
                    <td> <a href="fungsi/delete_biaya.php?id=<?= $item['id_admin'] ?>" class="btn btn-sm btn-danger">delete</a></td>
                </tr>
               <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br><br><br><br><b><b></b></b>
  </body>
</html>