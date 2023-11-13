<?php
include_once("inc/config.php");
$id_sparepart = $_GET['id'];
$data = mysqli_query($connection, "select * from sparepart where id_sparepart='$id_sparepart'");
$hasil = mysqli_fetch_array($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Sparepart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body><br><br><br>

<div class="container" id="register"><br>
<h1 style="color:white; " class="text-center">EDIT SPAREPART</h1>
<!-- form -->
    <form action="fungsi/edit_sparepart.php" method="POST">
    <div class="mb-3">
        <label for="kondisi_barang" class="form-label" style="color:white; ">id sparepart</label>
        <input type="text" class="form-control" value="<?= $hasil['id_sparepart'] ?>" id="id_sparepart" name="id_sparepart"><br>
        <label for="jenis_barang" class="form-label" style="color:white; ">Nama barang</label>
        <input type="text" class="form-control" value="<?= $hasil['jenis_barang'] ?>" id="jenis_barang" name="jenis_barang"><br>
        <label for="jumlah_barang" class="form-label" style="color:white; ">Jumlah barang</label>
        <input type="text" class="form-control" value="<?= $hasil['jumlah_barang'] ?>" id="jumlah_barang" name="jumlah_barang"><br>
        <label for="kondisi_barang" class="form-label" style="color:white; ">Kondisi Barang</label>
        <input type="text" class="form-control" value="<?= $hasil['kondisi_barang'] ?>" id="kondisi_barang" name="kondisi_barang">
      
    </div><br>
    <button type="submit" class="btn btn-primary">Perbarui</button><br><br>
    </form>
<!-- form -->

</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>