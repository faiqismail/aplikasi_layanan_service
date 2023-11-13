<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Keluhan</title>
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
          <li class="active"><a href="perbaikan.php">Keluhan</a></li>
          <li ><a href="biaya_perbaikan.php">Biaya_Perbaikan</a></li>
          <li ><a href="proses_perbaikan.php">Proses_Perbaikan</a></li>
          <li ><a href="addteknisi.php">ADD_Teknisi</a></li>
          <li ><a href="addsparepart.php">sparepart</a></li>
          <li ><a href="editakun.php">Edit_akun</a></li>
          <li ><a href="login.php">logout</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>

  <h1 class="text-center"><b>Laporan Keluhan</b></h1><br>

  </table>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <?php $no=1;?>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama pelanggan</th>
                <th scope="col">tgl_keluhan</th>
                <th scope="col">nama_perangkat</th>
                <th scope="col">merk</th>
                <th scope="col">keluhan</th>
                <th scope="col">foto kerusakan</th>
                
                <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="delete" width="26" height="26"><path d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z"></path></svg></th>
                </tr>
            </thead>
            <tbody>
               <?php 
               include "inc/config.php";
               $data = mysqli_query($connection,"SELECT * FROM keluhan INNER JOIN pelanggan ON keluhan.id_pelanggan = pelanggan.id_pelanggan");
               
              
               foreach($data as $item): ?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $item['nama_pelanggan'] ?></td>
                    <td><?= $item['tgl_keluhan'] ?></td>
                    <td><?= $item['nama_perangkat'] ?></td>
                    <td><?= $item['merk'] ?></td>
                    <td><?= $item['keluhan_kerusakan'] ?></td>
                    <td><img src="upload/<?= $item['file_kerusakan'] ?> "height="80" width="80" id="teknisi"></td>
                   
                    
                    <td> <a href="fungsi/deleteperbaikan.php?id=<?= $item['id_keluhan'] ?>" class="btn btn-sm btn-danger">delete</a></td>
                </tr>
               <?php endforeach ?>
            </tbody>
        </table>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </body>
</html>