<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sparepart</title>
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
          <li ><a href="proses_perbaikan.php">Proses_Perbaikan</a></li>
          <li ><a href="addteknisi.php">ADD_Teknisi</a></li>
          <li class="active"><a href="addsparepart.php">sparepart</a></li>
          <li ><a href="editakun.php">Edit_akun</a></li>
          <li ><a href="login.php">logout</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" id="register"><br>
    <h2 class="text-center"style="color:white;">DATA SPAREPART</h2>
        <form enctype="multipart/form-data" action="fungsi/addsparepart.php" method="POST" enctype="multipart/form-data" id="from">
        <div class="mb-3">
            <label for="jenis_barang" class="form-label" style="color:white;" ></label>
            <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" placeholder=" JENIS BARANG">
            
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label" style="color:white;" ></label>
            <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="MASUKKAN JUMLAH BARANG ">
        </div>
        <div class="mb-3">
            <label for="kondisi_barang" class="form-label" style="color:white;" ></label>
            <input type="text" class="form-control" id="kondisi_barang" name="kondisi_barang" placeholder=" KONDISI BARANG">
        </div><br>
        <button type="submit" name="submit" class="btn btn-primary">SAVE</button> 
       <br><br>
        </form>

        
    </div>
</div><br><br><br><br>
   


</table>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <?php $no=1;?>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis Barang </th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Kondisi Barang</th>
                <th scope="col"></th>
                <th scope="col"></th>
               
                </tr>
            </thead>
            <tbody>
               <?php 
               include "inc/config.php";

               $data = mysqli_query($connection,"select *  from sparepart");
               foreach($data as $item): ?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $item['jenis_barang'] ?></td>
                    <td><?= $item['jumlah_barang'] ?></td>
                    <td><?= $item['kondisi_barang'] ?></td>
                   
                    <td>
                        <a href="editsparepart.php?id=<?= $item['id_sparepart'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       
                    </td>
                    <td> <a href="fungsi/deletesparepart.php?id=<?= $item['id_sparepart'] ?>" class="btn btn-sm btn-danger">delete</a></td>
                </tr>
               <?php endforeach ?>
            </tbody>
        </table>
    </div>
    
   

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>