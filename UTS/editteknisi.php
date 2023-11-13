<?php
include_once("inc/config.php");
$id_pegawai= $_GET['id'];
$data = mysqli_query($connection, "select * from pegawai where id_pegawai='$id_pegawai'");
$hasil = mysqli_fetch_array($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pegawai</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body><br><br><br>

<div class="container" id="register"><br>
<h1 style="color:white; " class="text-center">EDIT PEGAWAI</h1>
<!-- form -->
    <form action="fungsi/editteknisi.php" method="POST">
    <div class="mb-3">
        <label for="id_pegawai" class="form-label" style="color:white; ">id Pegawai</label>
        <input type="text" class="form-control" value="<?= $hasil['id_pegawai'] ?>" id="id_pegawai" name="id_pegawai"><br>
        
        <label for="nama_pegawai" class="form-label" style="color:white; ">Nama Pegawai</label>
        <input type="text" class="form-control" value="<?= $hasil['nama_pegawai'] ?>" id="nama_pegawai" name="nama_pegawai"><br>
        
        <label for="alamat" class="form-label" style="color:white; ">Alamat</label>
        <input type="text" class="form-control" value="<?= $hasil['alamat'] ?>" id="alamat" name="alamat"><br>
       
        <label for="jabatan" class="form-label" style="color:white; ">Jabatan</label>
        <input type="text" class="form-control" value="<?= $hasil['jabatan'] ?>" id="jabatan" name="jabatan"><br>
       
        <label for="email_pegawai" class="form-label" style="color:white; ">Email Pegawai</label>
        <input type="text" class="form-control" value="<?= $hasil['email_pegawai'] ?>" id="email_pegawai" name="email_pegawai"><br>
       
        <label for="paswords" class="form-label" style="color:white; ">Paswords</label>
        <input type="text" class="form-control" value="<?= $hasil['paswords'] ?>" id="paswords" name="paswords">
      
    </div><br>
    <button type="submit" class="btn btn-primary">Perbarui</button><br><br>
    </form>
<!-- form -->

</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>