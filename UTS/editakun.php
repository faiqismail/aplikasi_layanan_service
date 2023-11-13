<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT AKUN ADMIN</title>
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
          <li ><a href="addsparepart.php">sparepart</a></li>
          <li class="active"><a href="editakun.php">Edit_akun</a></li>
          <li ><a href="login.php">logout</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav><br>
  <h1 class="text-center"><b>Edit Akun Admin</b></h1><br>
</table>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <?php $no=1;?>
                <tr>
                <th scope="col">#</th>
                <th scope="col">email_admin</th>
                <th scope="col">paswords</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
               <?php 
               include "inc/config.php";

               $data = mysqli_query($connection,"select *  from login_admin");
               foreach($data as $item): ?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $item['email_admin'] ?></td>
                    <td><?= $item['paswords'] ?></td>
                 
                    <td>
                        <a href="edit_akun.php?id=<?= $item['id_admin1'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       
                    </td>
                   
                </tr>
               <?php endforeach ?>
            </tbody>
        </table>
    </div>
    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>