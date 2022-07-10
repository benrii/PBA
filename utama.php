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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvoOAuH5adi7tQ0oBwyXmW4DDpP37JnwI&callback=initMap" async defer></script>
    <script type="text/javascript">
      function initMap() {
        var map = new google.maps.Map(document.getElementById('show_maps'), {
          center: {lat: -1.035721, lng: 118.436931},
          zoom: 5
        });
      }
    </script>
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
  <div class="Menu-Utama">
    <div class="row" style="margin-right :0px !important" style="--bs-gutter-x:none !important">
      <div class="col-md-12">
        <div class="panggil_kor">Panggil Koridor</div>
      </div>
    </div>
  </div>

        <div class="maps" style="text-align: center;" class="img-fluid" style="border-radius: 10px;">  
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127649.60715204824!2d104.008908602122!3d1.1242839928544255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98b85a2064d37%3A0x280d50335e8ddd69!2sHalte%20Trans%20Sekupang%20Batam!5e0!3m2!1sid!2sid!4v1638144337049!5m2!1sid!2sid" 
          height="400px" 
          allow="fullscreen" 
          loading="eager"> 
          </iframe>
        </div>
      
      </div>
    </div>
  </div>
    
  <div class="Menu-Utama3">
      <div class="col" >
        <div class="panggil_est1">
          <div class="time"><a>Nama Halte Bus</a></div>
          <div class="est">Dan waktu bus tiba : est</div>
        </div>
      </div>
      <div class="col">
        <div class="panggil_est2">
          <div class="img_koor"> Panggil foto</div>
        </div>
      </div>
    </div>
</body>
</html>