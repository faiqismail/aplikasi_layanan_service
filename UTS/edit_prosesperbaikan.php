
<?php
include_once "inc/config.php";
$id_perbaikan= $_GET['id'];
$datapelanggan = mysqli_query($connection, "SELECT * FROM pelanggan ");
$datakeluhan = mysqli_query($connection, " SELECT * FROM keluhan");
$dataadminservise = mysqli_query($connection, " SELECT * FROM adminservise");
$datapegawai = mysqli_query($connection, " SELECT * FROM pegawai");

$data = mysqli_query($connection,"SELECT *
FROM perbaikan
INNER JOIN pelanggan ON perbaikan.id_pelanggan = pelanggan.id_pelanggan
INNER JOIN keluhan ON perbaikan.id_keluhan = keluhan.id_keluhan 
INNER JOIN pegawai ON perbaikan.id_pegawai = pegawai.id_pegawai
INNER JOIN adminservise ON perbaikan.id_admin = adminservise.id_admin WHERE id_perbaikan = '$id_perbaikan'; ");
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

        <form action="fungsi/editprosesperbaikan.php" method="POST" enctype="multipart/form-data" id="from">


    <label  for="nama_pelanggan" class="form-label" style="color:white;">Nama Pelanggan</label>
    <select type="text" id="id_pelanggan" name="id_pelanggan" class="form-select" aria-label="Default select example"  >
    <option selected value="<?= $result['id_pelanggan']; ?>" > <?= $result['nama_pelanggan']; ?> </option>
    <?php foreach($datapelanggan as $item_pelanggan):   ?>
    <option value="<?=$item_pelanggan['id_pelanggan']?>" > <?= $item_pelanggan['nama_pelanggan']; ?>
    </option>
    <?php endforeach ?>
    </select>

    
    <br><label for="keluhan" class="form-label" style="color:white;">nama perangkat </label>
    <select type="text"  id="id_keluhan" name="id_keluhan" class="form-select" aria-label="Default select example" >
    <option selected value="<?= $result['id_keluhan']; ?>" > <?= $result['nama_perangkat']; ?> </option>
    <?php foreach($datakeluhan as $item_keluhan):   ?>
        <option value="<?=$item_keluhan['id_keluhan']?> " > <?= $item_keluhan['nama_perangkat']; ?>
    </option>
    <?php endforeach ?>
    </select><br>
      
    <label for="tgl_perbaikan" class="form-label" style="color:white;">tgl_perbaikan </label>
     <select type="date"  name="id_admin" id="tgl_perbaikan"  class="form-select" aria-label="Default select example">
     <option selected value="<?= $result['id_admin']; ?>" > <?= $result['tgl_perbaikan']; ?> </option>
     <?php foreach($dataadminservise as $item_admin):   ?>
    <option value="<?=$item_admin['id_admin']?>"  > <?= $item_admin['tgl_perbaikan']; ?>
    </option>
    <?php endforeach ?>
    </select><br>

   <label for="nama_pegawai" class="form-label" style="color:white;">Nama Pegawai </label>
     <select type="text" id="id_pegawai" name="id_pegawai"  class="form-select" aria-label="Default select example">
     <option selected value="<?= $result['id_pegawai']; ?>" > <?= $result['nama_pegawai']; ?> </option>
     <?php foreach($datapegawai as $item_pegawai):   ?>
    <option value="<?=$item_pegawai['id_pegawai']?> "  > <?= $item_pegawai['nama_pegawai']; ?>
    </option>
    <?php endforeach ?>
    </select>  <br>

   

    <label  for="status" class="form-label" style="color:white;">Status </label>
    <input type="text" class="form-control" id="status" name="status" value="<?=$result['status']?>" >   
    <input type="text" class="form-control" id="id_perbaikan" name="id_perbaikan" value="<?=$result['id_perbaikan']?>" hidden> 

   <br> <button type="submit" name="submit" class="btn btn-primary">SAVE</button> 
       <br><br>
    </button><br>
    </div>     
 
 
  <div class="container"><br><br>
<button type="reset" class="btn btn-dark" onclick="window.location.href='proses_perbaikan.php'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>KEMBALI</button>
</div><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>