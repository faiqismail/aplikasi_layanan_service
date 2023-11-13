<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Kerja</title>
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
        <li  ><a href="hometeknisi.php">Teknisi</a></li>
        <li class="active"><a href="tugaskerja.php">Tugas Kerja</a></li>
          <li ><a href="login.php">logout</a></li>
         
        </ul>
      </div>
    </div>
  </nav>
  <h2 class="text-center">Tugas Kerja</h2><br><br>
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
                        <a href="editstatus.php?id=<?= $item_perbaikan['id_perbaikan'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       
                    </td>
                    
                </tr>
                </tr>
               <?php endforeach ?>
            </tbody>
        </table>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
    
</html>
