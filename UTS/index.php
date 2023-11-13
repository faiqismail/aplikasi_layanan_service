<?php
 include_once "inc/config.php";
$resultpelanggan = mysqli_query($connection, " SELECT * FROM pelanggan ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jasa Service Elektronik</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  
</head>
<body>

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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="login.php">LOGIN</a></li>
         
        </ul>
      </div>
    </div>
  </nav>
  
  
<!-- pilihan-->
 <div class="container" id="register"><br>
<h1 class="elementor-heading-title elementor-size-default" style="text-align:center; color:white;">Mengapa Harus Kami?</h1>
<h4 class="elementor-heading-title elementor-size-default" style="text-align: center;color:white;">Alasan mengapa kami yang terbaik</h4>



  <div class="row"  id="register2">

    <div class="col-lg-2  " id="icon" style="  background-color:#ffff; "><br>
    <img width="75" height="75"class="img-fluid" alt="" src="https://cdn-gfiip.nitrocdn.com/yZFjGbTUGgFAxnsuUlLJVzlpTwqAjcwf/assets/static/optimized/rev-c0926b0/wp-content/uploads/2022/07/medal.png"> 
     <h4> Teknisi Berkualitas </h4> 
     </div>
     
    <div  class="col-lg-2 " id="icon" style="  background-color:#ffff; "><br>
     <img width="75" height="75"class="img-fluid" alt=""src="https://cdn-gfiip.nitrocdn.com/yZFjGbTUGgFAxnsuUlLJVzlpTwqAjcwf/assets/static/optimized/rev-c0926b0/wp-content/uploads/2022/07/appointment.png">  
             <h4> Jadwal Tepat Waktu </h4>     
     </div> 


    <div class="col-lg-2 " id="icon" style="  background-color:#ffff; "><br>
      <img width="75" height="75" class="img-fluid"alt="" src="https://cdn-gfiip.nitrocdn.com/yZFjGbTUGgFAxnsuUlLJVzlpTwqAjcwf/assets/static/optimized/rev-c0926b0/wp-content/uploads/2022/07/warranty.png"> 
                 <h4 >Garansi service</h4> 
     </div> 

    <div class="col-lg-2 " id="icon" style="  background-color:#ffff; "><br>
      <img width="75" height="75" class="img-fluid"alt=""  src="https://cdn-gfiip.nitrocdn.com/yZFjGbTUGgFAxnsuUlLJVzlpTwqAjcwf/assets/static/optimized/rev-c0926b0/wp-content/uploads/2022/07/wallet.png">  
                      <h4 > Harga Terjangkau </h4>
    </div>

    <div class="col-lg-2 " id="icon"style="  background-color:#ffff;  border-radius: 0px 50px 50px 0px; "><br>
                     <img width="75" height="75"class="img-fluid" alt="" nitro-lazy-src="https://cdn-gfiip.nitrocdn.com/yZFjGbTUGgFAxnsuUlLJVzlpTwqAjcwf/assets/static/optimized/rev-c0926b0/wp-content/uploads/2022/07/box.png" class="attachment- size- ls-is-cached lazyloaded" decoding="async" nitro-lazy-empty="" id="ODQ3OjE5MA==-1" src="https://cdn-gfiip.nitrocdn.com/yZFjGbTUGgFAxnsuUlLJVzlpTwqAjcwf/assets/static/optimized/rev-c0926b0/wp-content/uploads/2022/07/box.png"> 
                      <h4 > Penawaran Menarik </h4> 
      </div>
      
   
      
    </div>
   <br>
</div><br><br>          


<!--close-->


      <div class="image-container" style=" text-align: center;" >
        <img src="foto/sc1.png" id="teknisi" style="border-radius:10px;"class="slide" width="600" height="340" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="foto/foto3.png" id="teknisi" style="border-radius:10px;" class="slide" width="600" height="340" />
      </div><br>
     
      <!--close foto-->

  
     <h2 style="text-align: center;color:white;"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="Phone" width="30" height="30"><path d="M23.45 20.93a3 3 0 0 0-4.25 0l-1.45 1.45a26.14 26.14 0 0 1-4.51-3.62 26.14 26.14 0 0 1-3.62-4.51l1.45-1.45a3 3 0 0 0 0-4.25L8.24 5.73a2.93 2.93 0 0 0-2.11-.88h0A3 3 0 0 0 4 5.73L2.64 7.08A6.37 6.37 0 0 0 1 12.33c.32 3.75 2.78 8.26 6.57 12.06S15.92 30.64 19.67 31a7.87 7.87 0 0 0 .84 0 6.07 6.07 0 0 0 4.41-1.64L26.27 28a3 3 0 0 0 .88-2.13 2.93 2.93 0 0 0-.88-2.11zM26.6 5.39A14.92 14.92 0 0 0 16 1a1 1 0 1 0 0 2A13 13 0 0 1 29 16.11a1 1 0 0 0 1 1h0a1 1 0 0 0 1-1A14.91 14.91 0 0 0 26.6 5.39z" fill="#d85b53" class="color000000 svgShape"></path><path d="M20.91,11.11a6,6,0,0,1,1.77,4.31,1,1,0,0,0,1,1h0a1,1,0,0,0,1-1,8,8,0,0,0-8-8.1,1,1,0,1,0,0,2A6,6,0,0,1,20.91,11.11Z" fill="#d85b53" class="color000000 svgShape"></path></svg> HUBUNGI KAMI</h2><br>

<div class="container"  style=" text-align: center;">

     <div class="row text-center" style=" text-align: center;">
     
      <button type="button" class="btn btn-success" onclick="window.location.href='https://api.whatsapp.com/send?phone=[085155476677]'"style="text-align: center;  justify-content: ">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1219.547 1225.016" id="whatsapp"><path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path><linearGradient id="a" x1="609.77" x2="609.77" y1="1190.114" y2="21.084" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#20b038"></stop><stop offset="1" stop-color="#60d66a"></stop></linearGradient><path fill="url(#a)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path><path fill="#FFF" fill-rule="evenodd" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" clip-rule="evenodd"></path><path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path></svg>
     &nbsp;Whatsapp
   </button>&nbsp;&nbsp;&nbsp;
   
 
   
      <button type="button" class="btn btn-warning " onclick="location.href='https://www.instagram.com/servismesincuci_gresik/'" style="text-align: center;  justify-content: center;  ">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"  >
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>

     &nbsp;Instagram
     </button>&nbsp;&nbsp;&nbsp;
   
   
     <button type="button" class="btn " onclick="location.href='https://gmail.com'" style="text-align: center;  justify-content: center; background-color: #333; color:white;">
     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" data-name="Layer 1" viewBox="0 0 32 32" id="gmail"><path fill="#ea4435" d="M16.58,19.1068l-12.69-8.0757A3,3,0,0,1,7.1109,5.97l9.31,5.9243L24.78,6.0428A3,3,0,0,1,28.22,10.9579Z"></path><path fill="#00ac47" d="M25.5,5.5h4a0,0,0,0,1,0,0v18a3,3,0,0,1-3,3h0a3,3,0,0,1-3-3V7.5a2,2,0,0,1,2-2Z" transform="rotate(180 26.5 16)"></path><path fill="#ffba00" d="M29.4562,8.0656c-.0088-.06-.0081-.1213-.0206-.1812-.0192-.0918-.0549-.1766-.0823-.2652a2.9312,2.9312,0,0,0-.0958-.2993c-.02-.0475-.0508-.0892-.0735-.1354A2.9838,2.9838,0,0,0,28.9686,6.8c-.04-.0581-.09-.1076-.1342-.1626a3.0282,3.0282,0,0,0-.2455-.2849c-.0665-.0647-.1423-.1188-.2146-.1771a3.02,3.02,0,0,0-.24-.1857c-.0793-.0518-.1661-.0917-.25-.1359-.0884-.0461-.175-.0963-.267-.1331-.0889-.0358-.1837-.0586-.2766-.0859s-.1853-.06-.2807-.0777a3.0543,3.0543,0,0,0-.357-.036c-.0759-.0053-.1511-.0186-.2273-.018a2.9778,2.9778,0,0,0-.4219.0425c-.0563.0084-.113.0077-.1689.0193a33.211,33.211,0,0,0-.5645.178c-.0515.022-.0966.0547-.1465.0795A2.901,2.901,0,0,0,23.5,8.5v5.762l4.72-3.3043a2.8878,2.8878,0,0,0,1.2359-2.8923Z"></path><path fill="#4285f4" d="M5.5,5.5h0a3,3,0,0,1,3,3v18a0,0,0,0,1,0,0h-4a2,2,0,0,1-2-2V8.5a3,3,0,0,1,3-3Z"></path><path fill="#c52528" d="M2.5439,8.0656c.0088-.06.0081-.1213.0206-.1812.0192-.0918.0549-.1766.0823-.2652A2.9312,2.9312,0,0,1,2.7426,7.32c.02-.0475.0508-.0892.0736-.1354A2.9719,2.9719,0,0,1,3.0316,6.8c.04-.0581.09-.1076.1342-.1626a3.0272,3.0272,0,0,1,.2454-.2849c.0665-.0647.1423-.1188.2147-.1771a3.0005,3.0005,0,0,1,.24-.1857c.0793-.0518.1661-.0917.25-.1359A2.9747,2.9747,0,0,1,4.3829,5.72c.089-.0358.1838-.0586.2766-.0859s.1853-.06.2807-.0777a3.0565,3.0565,0,0,1,.357-.036c.076-.0053.1511-.0186.2273-.018a2.9763,2.9763,0,0,1,.4219.0425c.0563.0084.113.0077.169.0193a2.9056,2.9056,0,0,1,.286.0888,2.9157,2.9157,0,0,1,.2785.0892c.0514.022.0965.0547.1465.0795a2.9745,2.9745,0,0,1,.3742.21A2.9943,2.9943,0,0,1,8.5,8.5v5.762L3.78,10.9579A2.8891,2.8891,0,0,1,2.5439,8.0656Z"></path></svg>

    &nbsp;Gmail
     </button>

   </div>
   </div>

<br><br><br><br>
<h1 style="text-align: center;"><b>Apa Kata Mereka ?</b></h1><br>
  

<div class="container" style="background-color:white;border-radius:8px;">
			<!-- The slideshow -->
			<div class="carousel-inner"><br>

				<div class="carousel-item " >
					<img src="foto/komentar1.png"style="border:solid;" width="10" height="10" alt="Testimonial Image">
					<h3><b>joko Setiawan Satria</b></h3><br>
					<div class="elementor-testimonial__text"> " Teknisi cepat datang dan handal gak perlu waktu lama benerin pengering mesin cuci dirumah saya" &#128076; &#128076; </div>
				<h4>&#11088;&#11088;&#11088;&#11088;&#11088;</h4>
        </div><br>

				<div class="carousel-item">

					<img src="foto/komentar2.jpg" style="border:solid;" width="10" height="10" alt="Testimonial Image">
          <h3><b>Siti Fatmawati </b></h3><br>
					<div class="elementor-testimonial__text">"Saya sempat bingung untuk mencari layanan service kulkas, karena tiba-tiba kulkas saya mati. Untungnya saya segera search di google dan langsung ketemu serviceelektronikgresik.com, responnya dan pengerjaannya cepat, tidak menunggu waktu lama teknisi datang, dan kulkas saya sudah hidup seperti semula. Mantap." &#128077; &#128077;</div>
          <h4>&#11088;&#11088;&#11088;&#11088;&#11088;</h4>
        </div><br>

			</div>
            </div><br><br><br>

            <div class="container"  style=" text-align: center;">
            <div class="row text-center" style=" text-align: center;">
            <img src="foto/merk4.png" alt="fotomerk" width="200" height="50" style="border-radius: 30px 0px 0px 30px;"  id="teknisi">&nbsp;
            <img src="foto/merk2.png" alt="fotomerk"  width="200" height="50"  id="teknisi">&nbsp;
            <img src="foto/merk5.png" alt="fotomerk"  width="200" height="50"  id="teknisi">&nbsp;
            <img src="foto/merk7.png" alt="fotomerk"  width="200" height="50" style="border-radius: 0px 30px 30px 0px;"  id="teknisi">&nbsp;
</div>
</div>
   <br><br>
  <div class="garis" style="background-color: blue; ">
    <br>
  </div>
   <footer class="bg-light py-4"  style="background-color: #1a1818;"><br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <img src="foto/logo.webp" alt="" width="275" height="130">

        <ul class="list-unstyled">
          <li style="color:white;"> <h5>&#127978; Layanan kami Tersedia Gresik - Lamongan</h5></li>
          
        </ul>
      </div>
      <div class="col-md-4">
        <h3 style="color:white;">Menerima Service  </h3>
        <ul class="list-unstyled" >
          
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="washing-machine" width="15" height="15" ><path fill="#4D4D4D" d="M14 58h2v3h-2zM48 58h2v3h-2z"></path><path fill="#CCC" d="M8 5a2 2 0 0 1 2-2h44a2 2 0 0 1 2 2v52a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2V5z"></path><circle cx="32" cy="37" r="18" fill="#4D4D4D"></circle><circle cx="32" cy="37" r="14" fill="#FFF"></circle><path fill="#3EBBDD" d="M56 5a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2v10h48V5z"></path><path fill="#FFF" d="M12 7h16v4H12zM35 6h18v2H35zM35 10h2v2h-2zM39 10h2v2h-2zM43 10h2v2h-2zM47 10h2v2h-2zM51 10h2v2h-2zM44.318 30.342C41.95 25.97 37.322 23 32 23c-5.767 0-10.716 3.489-12.861 8.469 9.238 3.428 16.035-4.13 25.179-1.127z"></path><path fill="#3EBBDD" d="M19.139 31.469A13.963 13.963 0 0 0 18 37c0 7.732 6.268 14 14 14s14-6.268 14-14c0-2.41-.61-4.677-1.682-6.658-9.144-3.003-15.941 4.555-25.179 1.127z"></path><path fill="#FFF" d="M39 41c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2zM27 42c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-4a1.001 1.001 0 0 0 0 2 1.001 1.001 0 0 0 0-2zM33 48c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-4a1.001 1.001 0 0 0 0 2 1.001 1.001 0 0 0 0-2z"></path></svg>  Mesin Cuci</li>
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.5 47.5" id="tv" width="18" height="18"><defs><clipPath id="a" ><path d="M0 38h38V0H0v38Z"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.25 0 0 -1.25 0 47.5)"><path fill="#414042" d="M36 6s0-4-4-4H6C2 2 2 6 2 6v19c0 4 4 4 4 4h26s4 0 4-4V6Z"></path><path fill="#414042" d="M22.303 26.61a.999.999 0 1 0-1.414-1.414l-9.192 9.192a.999.999 0 1 0 1.414 1.414l9.192-9.192Z"></path><path fill="#414042" d="M15.697 26.61a.999.999 0 1 1 1.414-1.414l9.192 9.192a.999.999 0 1 1-1.414 1.414l-9.192-9.192Z"></path><path fill="#55acee" d="M19 26c8 0 10-1 11-2s2-3 2-8-1-7-2-8-3-2-11-2S9 7 8 8s-2 3-2 8 1 7 2 8 3 2 11 2"></path><path fill="#66757f" d="M31 5.5a1.5 1.5 0 1 0 2.999.001A1.5 1.5 0 0 0 31 5.5M4 5.5a1.5 1.5 0 1 0 2.999.001A1.5 1.5 0 0 0 4 5.5"></path></g></svg> Smart Tv</li>
          <li style="color:white;">& elektronik lainya</li>
          
        </ul>
      </div>
      <div class="col-md-4">
        <h3 style="color:white;">Kontak kami</h3>
        <ul class="list-unstyled">
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 1219.547 1225.016" id="whatsapp"><path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path><linearGradient id="a" x1="609.77" x2="609.77" y1="1190.114" y2="21.084" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#20b038"></stop><stop offset="1" stop-color="#60d66a"></stop></linearGradient><path fill="url(#a)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path><path fill="#FFF" fill-rule="evenodd" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" clip-rule="evenodd"></path><path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path></svg> 082231184092</li>
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" data-name="Layer 1" viewBox="0 0 32 32" id="gmail"><path fill="#ea4435" d="M16.58,19.1068l-12.69-8.0757A3,3,0,0,1,7.1109,5.97l9.31,5.9243L24.78,6.0428A3,3,0,0,1,28.22,10.9579Z"></path><path fill="#00ac47" d="M25.5,5.5h4a0,0,0,0,1,0,0v18a3,3,0,0,1-3,3h0a3,3,0,0,1-3-3V7.5a2,2,0,0,1,2-2Z" transform="rotate(180 26.5 16)"></path><path fill="#ffba00" d="M29.4562,8.0656c-.0088-.06-.0081-.1213-.0206-.1812-.0192-.0918-.0549-.1766-.0823-.2652a2.9312,2.9312,0,0,0-.0958-.2993c-.02-.0475-.0508-.0892-.0735-.1354A2.9838,2.9838,0,0,0,28.9686,6.8c-.04-.0581-.09-.1076-.1342-.1626a3.0282,3.0282,0,0,0-.2455-.2849c-.0665-.0647-.1423-.1188-.2146-.1771a3.02,3.02,0,0,0-.24-.1857c-.0793-.0518-.1661-.0917-.25-.1359-.0884-.0461-.175-.0963-.267-.1331-.0889-.0358-.1837-.0586-.2766-.0859s-.1853-.06-.2807-.0777a3.0543,3.0543,0,0,0-.357-.036c-.0759-.0053-.1511-.0186-.2273-.018a2.9778,2.9778,0,0,0-.4219.0425c-.0563.0084-.113.0077-.1689.0193a33.211,33.211,0,0,0-.5645.178c-.0515.022-.0966.0547-.1465.0795A2.901,2.901,0,0,0,23.5,8.5v5.762l4.72-3.3043a2.8878,2.8878,0,0,0,1.2359-2.8923Z"></path><path fill="#4285f4" d="M5.5,5.5h0a3,3,0,0,1,3,3v18a0,0,0,0,1,0,0h-4a2,2,0,0,1-2-2V8.5a3,3,0,0,1,3-3Z"></path><path fill="#c52528" d="M2.5439,8.0656c.0088-.06.0081-.1213.0206-.1812.0192-.0918.0549-.1766.0823-.2652A2.9312,2.9312,0,0,1,2.7426,7.32c.02-.0475.0508-.0892.0736-.1354A2.9719,2.9719,0,0,1,3.0316,6.8c.04-.0581.09-.1076.1342-.1626a3.0272,3.0272,0,0,1,.2454-.2849c.0665-.0647.1423-.1188.2147-.1771a3.0005,3.0005,0,0,1,.24-.1857c.0793-.0518.1661-.0917.25-.1359A2.9747,2.9747,0,0,1,4.3829,5.72c.089-.0358.1838-.0586.2766-.0859s.1853-.06.2807-.0777a3.0565,3.0565,0,0,1,.357-.036c.076-.0053.1511-.0186.2273-.018a2.9763,2.9763,0,0,1,.4219.0425c.0563.0084.113.0077.169.0193a2.9056,2.9056,0,0,1,.286.0888,2.9157,2.9157,0,0,1,.2785.0892c.0514.022.0965.0547.1465.0795a2.9745,2.9745,0,0,1,.3742.21A2.9943,2.9943,0,0,1,8.5,8.5v5.762L3.78,10.9579A2.8891,2.8891,0,0,1,2.5439,8.0656Z"></path></svg> Serviceelektronikgresik@gmail.com</li>
          <li style="color:white;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="Phone" width="18" height="18"><path fill="#d8a353" d="m15.88 3.86-.61-1.31a1.214 1.214 0 0 0-.792-.658c-1.938-.528-4.161-.851-6.453-.891a27.46 27.46 0 0 0-6.687.934c-.165.048-.453.29-.605.609L.12 3.861a1.195 1.195 0 0 0-.12.52v.87l-.001.041c0 .392.318.71.71.71l.033-.001H3.26a.76.76 0 0 0 .742-.76L4 5.188v-.85a.65.65 0 0 1 .298-.546 6.913 6.913 0 0 1 3.724-.791 6.965 6.965 0 0 1 3.717.788c.143.099.262.3.262.529v.872a.76.76 0 0 0 .739.81h2.521l.031.001a.71.71 0 0 0 .71-.71l-.001-.043V4.38a1.208 1.208 0 0 0-.123-.527z" class="color444444 svgShape"></path><path fill="#d8a353" d="M12 8.3a4.73 4.73 0 0 1-1.001-2.92L11 5.296V5h-1v1H6V5H5v.33l.001.08a4.74 4.74 0 0 1-1.009 2.93L1 12v3h14v-3zM8 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" class="color444444 svgShape"></path><path fill="#d8a353" d="M10 10a2 2 0 1 1-3.999.001A2 2 0 0 1 10 10z" class="color444444 svgShape"></path></svg>  +6282231184092</li>
        </ul>
      </div>
    </div>
  </div><br>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
