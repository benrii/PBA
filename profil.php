<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}

include 'koneksi.php';
$nama   = $_SESSION['user'];
$user       = mysqli_query($conn, "select * from user where nama='$nama'");
$row            = mysqli_fetch_array($user);

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
              <span class="line line1"></span >
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
  <div class="Menu-Profil" >
    <div class="nama"><i class="fas fa-user-circle"  style="font-size: 100px;"></i><br><?php echo $_SESSION['user']?></div>
    <div class="user"><i class="far fa-user"></i><a href="ubah_user.php">&emsp;Ubah Profil</div>
    <div class="kebijakan" ><i class="fas fa-lock"></i><a href="kebijakan.php">&emsp;Kebijakan Privasi</div>
    <div class="ketentuan"><i class="fas fa-flag"></i><a href="ketentuan.php">&emsp;Ketentuan Layanan</a></div>
    <div class="tentang"><i class="fas fa-info-circle"></i><a href="tentang.php">&emsp;Tentang Aplikasi</div>
    <div class="logout"><i class="fas fa-sign-out-alt"></i><a href="logout.php">&emsp;Log Out</div>
  </div>
</body>
</html>