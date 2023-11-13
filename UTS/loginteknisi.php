<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_pegawai= $_POST['email_pegawai'];
    $paswords = $_POST["paswords"];
    

  // verifikasi informasi pengguna
  include "inc/config.php";
  $query = "SELECT * FROM pegawai WHERE email_pegawai = '$email_pegawai' AND paswords = '$paswords'";
  $result = mysqli_query($connection, $query);
  $data = mysqli_num_rows($result);
  if ($data>0) {
    // jika informasi pengguna benar, berikan akses ke halaman tertentu
    $key = mysqli_fetch_assoc($result);

    $_SESSION["id_pegawai"]=$key["id_pegawai"];
    $_SESSION["nama_pegawai"]=$key["nama_pegawai"];
    $_SESSION["alamat"]=$key["alamat"];
    $_SESSION["jabatan"]=$key["jabatan"];
    $_SESSION["email_pegawai"]=$key["email_pegawai"];
   
    header('Location: hometeknisi.php');
    exit();
  } else {
    // jika informasi pengguna salah, tampilkan pesan kesalahan
    $error = 'email atau password salah';
    echo "<script>
        document.location.href='loginteknisi.php'
        alert('email atau password salah ')
        </script>";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login Teknisi</title>
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
          <li ><a href="index.php">Home</a></li>
          <li class="active"><a href="loginteknisi.php">Teknisi</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>

<div class="login-box">
  <p>Login</p>
  <form  method="POST">
    <div class="user-box">
      <input type="email_pegawai" name="email_pegawai" id="email_pegawai"class="form-control">
      <label for="email_pegawai" class="form-label">Email</label>
    </div>
    <div class="user-box">
      <input  name="paswords" id="paswords" type="password"class="form-control">
      <label for="paswords" class="form-label">Password</label>
    </div>
    <button type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>LOGIN</button>
      <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  </form>
 
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  </body>
</html>