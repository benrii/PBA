<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Public Bus Arival</title>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./js/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./css/font-awesome.min.css"/>
</head>
<body>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li>&emsp;<i class="fas fa-route"></i><a href="pilih_rute.php">&emsp;Rute</a></li>
              <li>&emsp;<i class="far fa-calendar-check"></i><a href="jadwal.php">&emsp;Jadwal</a></li>
              <li>&emsp;<i class="far fa-user"></i><a href="profil.php">&emsp;Profil</a></li>
          </ul>
      </div>
  </nav>
  <div class="container1">
    <div class="row" style="margin-right :0px !important" style="--bs-gutter-x:none !important">
      <div class="col"> 
          <div class="bus">BUS ARR </div>
      </div>
      <div class="col">
        <div class="gambar">
              <img src="pic/logo.png" style="width: 80px" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="container2">
    <div class="row" style="margin-right :0px !important" style="--bs-gutter-x:none !important">
      <div class="col-md-12">
        <div class="cari">
          Cari Rute Trans Batam <br><br><br>
          Klik Untuk Memilih Rute <br>
          <button> Pilih Rute</button>
        </div>
      </div>

      <div class="box1">
      <div class="col" style="flex-shrink: none !important">
        <div class="profil">
          <li><i class="far fa-user" style="font-size: 55px;"></i><a href="profil.php"><br>Profil</a></li>
        </div>
      </div>

      <div class="col">
        <div class="jadwal">
            <li><i class="far fa-calendar-check" style="font-size: 55px;"></i><br><a href="jadwal.php">Jadwal</a></li>
        </div>
      </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="box2"></div>
  </footer>
</body>
</html>