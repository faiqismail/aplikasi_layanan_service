<?php
 include_once "inc/config.php";
$datapelanggan = mysqli_query($connection, " select * from pelanggan order by id_pelanggan desc");
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA KELUHAN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
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
        <li ><a href="homepelanggan.php">Pelanggan</a></li>
        <li class="active"><a href="keluhan.php">Lapor Keluhan</a></li>
          <li ><a href="tabelkeluhan.php">Status Keluhan</a></li>
          <li ><a href="login.php">logout</a></li>
         
        </ul>
      </div>
    </div>
  </nav><br>

  <div class="container" style=" text-align: center;">
        <img src="foto/logo.webp"  alt="logo" width="200">
      
        </div>

   <br> <div class="container" id="register"><br>
    <h2 class="text-center"style="color:white;">KIRIM KELUHAN</h2>
    
        <form enctype="multipart/form-data" action="fungsi/add_keluhan.php" method="POST" enctype="multipart/form-data" id="from">


        <div class="mb-3">
            <label for="nama_perangkat" class="form-label" style="color:white;" >Nama Perangkat</label>
            <input type="text" class="form-control" id="nama_perangkat" name="nama_perangkat" placeholder="MASUKKAN NAMA PERANGKAT">
        </div><br>
        <div class="mb-3">
            <label for="merk" class="form-label" style="color:white;" >Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" placeholder="MASUKKAN MERK">
        </div><br>
        <div class="mb-3">
            <label for="keluhan_kerusakan" class="form-label" style="color:white;" >Keluhan</label>
            <textarea type="text" class="form-control" id="keluhan_kerusakan" name="keluhan_kerusakan" rows="3"  placeholder="MASUKKAN KELUHAN ANDA"></textarea>
            
        </div><br>
        <div class="mb-3">
        <label for="file_kerusakan" class="form-label" style="color:white;" >Foto Kerusakan</label>
        <input type="file" class="form-control mt-2" id="file_kerusakan" name="file_kerusakan" > <br>
        </div><br>
        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button> 
       <br><br>
        </form>

        
    </div>
</div><br><br><br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
    
</html>

