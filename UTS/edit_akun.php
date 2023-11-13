<?php
include_once("inc/config.php");
$id_admin1= $_GET['id'];
$data = mysqli_query($connection, "select * from login_admin where id_admin1='$id_admin1'");
$hasil = mysqli_fetch_array($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body><br><br><br>

<div class="container" id="register"><br>
<h1 style="color:white; " class="text-center">EDIT ADMIN</h1>
<!-- form -->
    <form action="fungsi/edit_admin.php" method="POST">
    <div class="mb-3">
        <label for="id_admin1" class="form-label" style="color:white; ">id Admin</label>
        <input type="text" class="form-control" value="<?= $hasil['id_admin1'] ?>" id="id_admin1" name="id_admin1"><br>
        <label for="email_admin" class="form-label" style="color:white; ">Gmail Admin</label>
        <input type="text" class="form-control" value="<?= $hasil['email_admin'] ?>" id="email_admin" name="email_admin"><br>
        <label for="paswords" class="form-label" style="color:white; ">paswords</label>
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