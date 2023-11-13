<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data PELANGGAN</title>
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
          <li class="active"><a href="pelanggan.php">Data Pelanggan</a></li>
         
        </ul>
      </div>
    </div>
  </nav><br>

  
  

  

    <div class="container" id="register"><br>
    <h2 class="text-center"style="color:white;">DATA PELANGGAN</h2>
        <form action="fungsi/add_pelanggan.php" method="POST" enctype="multipart/form-data" id="from">
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label" style="color:white;" >Nama</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="MASUKKAN NAMA">
        </div><br>
        <div class="mb-3">
            <label for="alamat_lengkap" class="form-label" style="color:white;" >Alamat Lengkap</label>
            <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" placeholder="MASUKKAN ALAMAT LENGKAP">
        </div><br>
        <div class="mb-3">
            <label for="no_hp" class="form-label" style="color:white;" >Nomer Telepon</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="MASUKKAN NOMER HP">
        </div><br>
        <div class="mb-3">
            <label for="email" class="form-label" style="color:white;" >Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="MASUKKAN EMAIL">
        </div><br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color:white;">paswords</label>
            <input type="password" class="form-control" id="paswords" name="paswords" placeholder="******">
        </div><br><br>

        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button> 
       <br><br>
        </form>

        
    </div>
</div>
   

<div class="container"><br><br>
<a href="loginpelanggan.php"><button type="reset" class="btn btn-dark" style="text-align: center;  justify-content: center; background-color: #333; color:white; " >
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="back" width="20" height="20" ><path fill="#d8a353" d="M20.86 33a2 2 0 0 1-1.26-.45L8.74 23.58a2 2 0 1 1 2.54-3.09l10.86 8.93a2 2 0 0 1 .27 2.81 2 2 0 0 1-1.55.77Z" class="color222222 svgShape"></path><path fill="#d8a353" d="M10 24a2 2 0 0 1-1.27-3.55l10.87-8.88a2 2 0 0 1 2.54 3.09l-10.86 8.92A2 2 0 0 1 10 24Z" class="color222222 svgShape"></path><path fill="#d8a353" d="M39.57 52.89H10a2 2 0 1 1 0-4h29.57a12.43 12.43 0 0 0 0-24.85H10a2 2 0 1 1 0-4h29.57a16.43 16.43 0 0 1 0 32.85Z" class="color222222 svgShape"></path></svg>
KEMBALI</button></a>
</div><br>
<br><br><br>


  
<br><br><br><br><b><b></b></b>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </body>
</html>