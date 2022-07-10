<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Public Bus Arival</title>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./js/all.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.min.css"/>
        <style type="text/css">

      /* Desktop */
.navbar input[type="checkbox"],
.navbar .hamburger-lines {
  display: none;
}
.navbar {
  box-shadow: 0px 5px 10px #aaa;
  position: relative;
  width: 100%;
  background: #323B97;
  opacity: 0.85;
  height: 80px;
  z-index: 12;
}
.navbar-container {
  height: 50%;
}
.menu-items {
  display: flex;
}

.menu-items li {
  list-style: none;
  color: #323B97;
  padding-left:10px;
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
}
.menu-items a {
  text-decoration: none;
  color: white;
  transition: color 0.3s ease-in-out;
}
.menu-items a:hover {
  color: #F2651D;
  transition: color 0.3s ease-in-out;
}
      .login {
        margin: 10% 10% 10% 10%;
      }
       /* UBAH */
      .login__field {
        margin: 0% 15% 0% 15%;
        font-weight: bold;
        color: black;
        padding: 20px 0px;  
       position: relative; 
      }

      .login__input {
          border: none;
          border-bottom: 2px solid #D1D1D4;
          background: none;
          width: 100%;
          font-style: italic;
      }
      .login .simpan button {
          margin: 2% 25% 5% 25%;
          padding: 2% 0% 2% 0%;
          width: 50%;
          border-radius: 20px;
          background-color: #323B97;
          color: white;
          box-shadow: -2px -2px 5px #aaa, 2px 2px 5px #aaa;
      }

      /* Mobile */

      @media (max-width: 768px) {
        .navbar {
          opacity: 0.95;
          background: #323B97;
          border-bottom-right-radius: 20px;
          border-bottom-left-radius: 20px;
        }

        
        .navbar-container {
          display: block;
          position: absolute;
          height: 64px;
        }
        .navbar-container input[type="checkbox"] {
          position: absolute;
          display: block;
          height: 32px;
          width: 30px;
          top: 20px;
          left: 20px;
          z-index: 5;
          opacity: 0;
        }
        .navbar-container .hamburger-lines {
          display: block;
          height: 23px;
          width: 35px;
          position: absolute;
          top: 20px;
          left: 30px;
          z-index: 2;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }
        .navbar-container .hamburger-lines .line {
          display: block;
          height: 4px;
          width: 100%;
          border-radius: 10px;
          background: white;
        }
        .navbar .menu-items {
          background: #fff;
          max-width: 300px;
          min-width: 200px;
          transform: translate(-150%);
          display: flex;
          flex-direction: column;
          color: black;
          margin-left: -40px;
          margin-top: 57px;
          padding-left: 10px;
          padding-right: 15px;
          transition: transform 0.5s ease-in-out;
          box-shadow: 1px 0px 1px 0px #aaa;
        }
        .navbar .menu-items li {
          margin-bottom: 1.5rem;
          color: black;
          font-size: 1.3rem;
          font-weight: 500;
        }
        .navbar-container input[type="checkbox"]:checked ~ .menu-items {
          transform: translateX(0);
        }
        .navbar .menu-items li {
          margin-top:7%;
          font-size: 1.3rem;
          font-weight: 500;
        }
        .menu-items a {
        text-decoration: none;
        color: black;
        font-weight: 500;
        transition: color 0.3s ease-in-out;
      }
      .login {
        margin: 10% 10% 10% 10%;
      }
       /* UBAH */
      .login__field {
        margin: 0% 15% 0% 15%;
        font-weight: bold;
        color: black;
        padding: 20px 0px;  
       position: relative; 
      }

      .login__input {
          border: none;
          border-bottom: 2px solid #D1D1D4;
          background: none;
          width: 100%;
          font-style: italic;
      }
      .login .simpan button {
          margin: 2% 25% 5% 25%;
          padding: 2% 0% 2% 0%;
          width: 50%;
          border-radius: 20px;
          background-color: #323B97;
          color: white;
          box-shadow: -2px -2px 5px #aaa, 2px 2px 5px #aaa;
      }
    }
</style>
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
              <li>&emsp;<i class="fas fa-route"></i><a href="#home">&emsp;Rute</a></li>
              <li>&emsp;<i class="far fa-calendar-check"></i><a href="jadwal.php">&emsp;Jadwal</a></li>
              <li>&emsp;<i class="far fa-user"></i><a href="profil.php">&emsp;Profil</a></li>
          </ul>
      </div>
  </nav>
  <form class="login">

        <div class="login__field">
          Nama Lengkap<br>
          <input type="text" class="login__input" placeholder="ubah nama">
        </div>
          <div class="simpan">
          <button> Simpan</button>
        </div>
      </form>
</body>
</html>