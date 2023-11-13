<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
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
          <li ><a href="index.php">Home</a></li>
          <li class="active"><a href="login.php">LOGIN</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>

<div class="container" style="text-align: center;">
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" id="profile"><path d="M44 50c0 1.1-.9 2-2 2H24c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2zm-6 12H24c-1.1 0-2 .9-2 2s.9 2 2 2h14c1.1 0 2-.9 2-2s-.9-2-2-2zm4-28H24c-1.1 0-2 .9-2 2s.9 2 2 2h18c1.1 0 2-.9 2-2s-.9-2-2-2zm46-8v48c0 1.1-.9 2-2 2H14c-1.1 0-2-.9-2-2V26c0-1.1.9-2 2-2h72c1.1 0 2 .9 2 2zm-4 2H16v44h68V28zm-6.1 36c0 1.1-.9 2-2 2H48c-1.1 0-2-.9-2-2 0-6.6 3.9-12.2 9.6-14.7-1.9-1.9-3.2-4.5-3.2-7.3 0-5.3 4.4-10 9.5-10s9.5 4.7 9.5 10c0 2.8-1.2 5.4-3.2 7.3 5.7 2.5 9.7 8.1 9.7 14.7zM56.4 42c0 2.8 2.4 6 5.5 6s5.5-3.2 5.5-6-2.4-6-5.5-6-5.5 3.2-5.5 6zm17.4 20c-.9-5.7-5.9-10-11.8-10s-10.8 4.3-11.8 10h23.6z"></path><path fill="#00F" d="M1364-790V894H-420V-790h1784m8-8H-428V902h1800V-798z"></path></svg>
</div>

 <h2 style="text-align: center;color:black;">Login Sebagai </h2><br>

<div class="container"  style=" text-align: center;">

     <div class="row text-center" style=" text-align: center;">
     
      <button type="button" class="btn btn-success" onclick="window.location.href='loginpelanggan.php'"style="text-align: center;  justify-content: ">
     
     &nbsp;Pelanggan
   </button>&nbsp;&nbsp;&nbsp;
   
 
     <button type="button" class="btn btn-warning " onclick="location.href='loginteknisi.php'" style="text-align: center;  justify-content: center;  ">

     &nbsp;Teknisi
     </button>&nbsp;&nbsp;&nbsp;
   
   
     <button type="button" class="btn " onclick="location.href='loginadmin.php'" style="text-align: center;  justify-content: center; background-color: #333; color:white;">
   
    &nbsp;Admin
     </button>

   </div>
   </div>

  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  </body>
</html>