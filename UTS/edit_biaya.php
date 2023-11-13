<?php
include_once "inc/config.php";
$id_admin= $_GET['id'];
$datapelanggan = mysqli_query($connection, "SELECT * FROM pelanggan ");
$datakeluhan = mysqli_query($connection, " SELECT * FROM keluhan");
$datasparepart = mysqli_query($connection, " SELECT * FROM sparepart");

$data = mysqli_query($connection,"SELECT *
FROM adminservise 
INNER JOIN pelanggan ON adminservise.id_pelanggan = pelanggan.id_pelanggan
INNER JOIN keluhan ON adminservise.id_keluhan = keluhan.id_keluhan 
INNER JOIN sparepart ON adminservise.id_sparepart= sparepart.id_sparepart WHERE id_admin = '$id_admin';");
$result = mysqli_fetch_array($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Biaya Perbaikan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <body ><br>
  

<div class="container" id="register"><br>
    <h2 class="text-center"style="color:white;">EDIT BIAYA PERBAIKAN </h2>

        <form action="fungsi/edit_biaya.php" method="POST" enctype="multipart/form-data" id="from">
       
   

    <label  for="nama_pelanggan" class="form-label" style="color:white;">Nama Pelanggan</label>
    <select type="text" id="id_pelanggan" name="id_pelanggan" class="form-select" aria-label="Default select example"  >
    <option selected value="<?= $result['id_pelanggan']; ?>" > <?= $result['nama_pelanggan']; ?> </option>
    <?php foreach($datapelanggan as $item_pelanggan):   ?>
    <option value="<?=$item_pelanggan['id_pelanggan']?>" > <?= $item_pelanggan['nama_pelanggan']; ?>
    </option>
    <?php endforeach ?>
    </select>

    
    <br><label for="keluhan" class="form-label" style="color:white;">Keluhan </label>
    <select type="text"  id="keluhan" name="id_keluhan" class="form-select" aria-label="Default select example" >
    <option selected value="<?= $result['id_keluhan']; ?>" > <?= $result['keluhan_kerusakan']; ?> </option>
    <?php foreach($datakeluhan as $item_keluhan):   ?>
        <option value="<?=$item_keluhan['id_keluhan']?> " > <?= $item_keluhan['keluhan_kerusakan']; ?>
    </option>
    <?php endforeach ?>
    </select><br>
      

 
    <label  for="tgl_perbaikan" class="form-label" style="color:white;">TGL perbaikan</label>
    <input type="date" class="form-control" id="tgl_perbaikan" name="tgl_perbaikan" value="<?=$result['tgl_perbaikan']?>">   
    <input type="date" class="form-control" id="id_admin" name="id_admin" value="<?=$result['id_admin']?>" hidden> <br>

   <label for="jenis_barang" class="form-label" style="color:white;">Jenis Sparepart </label>
     <select type="text"  name="id_sparepart"  class="form-select" aria-label="Default select example">
     <option selected value="<?= $result['id_sparepart']; ?>" > <?= $result['jenis_barang']; ?> </option>
     <?php foreach($datasparepart as $item_sparepart):   ?>
    <option value="<?=$item_sparepart['id_sparepart']?> "  > <?= $item_sparepart['jenis_barang']; ?>
    </option>
    <?php endforeach ?>
    </select>  <br>

    <label  for="biaya_lain" class="form-label" style="color:white;">Biaya Lain </label>
    <input type="text" class="form-control" id="biaya_lain" name="biaya_lain"value="<?=$result['biaya_lain']?>">
    <input type="text" class="form-control" id="id_admin" name="id_admin" value="<?=$result['id_admin']?>" hidden> <br>

    <label  for="total_biaya" class="form-label" style="color:white;">Total biaya </label>
    <input type="text" class="form-control" id="total_biaya" name="total_biaya" value="<?=$result['total_biaya']?>" >   
    <input type="text" class="form-control" id="id_admin" name="id_admin" value="<?=$result['id_admin']?>" hidden> 

   <br> <button type="submit" name="submit" class="btn btn-primary">SAVE</button> 
       <br><br>
    </button><br>
    </div>     
 
 
  <div class="container"><br><br>
<button type="reset" class="btn btn-dark" onclick="window.location.href='biaya_perbaikan.php'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>KEMBALI</button>
</div><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>