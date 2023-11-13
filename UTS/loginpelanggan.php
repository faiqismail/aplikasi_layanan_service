<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email= $_POST['email'];
    $paswords = $_POST["paswords"];
    

  // verifikasi informasi pengguna
  include "inc/config.php";
  $query = "SELECT * FROM pelanggan WHERE email = '$email' AND paswords = '$paswords'";
  $result = mysqli_query($connection, $query);
  $data = mysqli_num_rows($result);
  if ($data>0) {
    // jika informasi pengguna benar, berikan akses ke halaman tertentu
    $key = mysqli_fetch_assoc($result);

    $_SESSION["id_pelanggan"]=$key["id_pelanggan"];
    $_SESSION["nama_pelanggan"]=$key["nama_pelanggan"];
    $_SESSION["alamat_lengkap"]=$key["alamat_lengkap"];
    $_SESSION["no_hp"]=$key["no_hp"];
    $_SESSION["email"]=$key["email"];
   
    header('Location: homepelanggan.php');
    exit();
  } else {
    // jika informasi pengguna salah, tampilkan pesan kesalahan
    $error = 'email atau password salah';
    echo "<script>
        document.location.href='loginpelanggan.php'
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
    <title>Login Pelanggan</title>
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
          <li class="active"><a href="loginpelanggan.php">Pelanggan</a></li>
        </ul>
      </div>
    </div>
  </nav>


<div class="login-box">
  <p>Login</p>
  <form   method="POST">
    <div class="user-box">
      <input type="email" name="email" id="email"class="form-control">
      <label for="email" class="form-label">Email</label>
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
  <p>Don't have an account? <a href="pelanggan.php">Sign up!</a></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>