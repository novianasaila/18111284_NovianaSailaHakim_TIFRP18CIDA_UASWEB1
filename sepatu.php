<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Halaman Menu Utama</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="modul/css/menuutama.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="halmenuutama.php">BT21</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#keranjang" >KERANJANG</a></li> 
            <li><a href="#favorite">FAVORITE</a></li>
            <li><a href="chat.php">CHAT</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown"href="#">SETTING <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="login.php" class="btn btn-primary mr-3">KELUAR</a></li>
            <li><a href="edit_profile.php" class="btn btn-primary mr-3">PROFILE</a></li>
          </ul>
        </div>
     </div>
   </nav>
   
   <div class="jumbotron text-center">
     <h1>
       <img src="bt21/logo_bt21.PNG">
      </h1>
      <form class="form-inline">
        <div class="input-group">
          <h4>Hello guys<br> <br>Temen-temen yang menyukai BT21, kami disini menyediakan barang atau aksesoris Official maupun Unofficial yang berbau BT21<br> 
            Dengan kualitas yang bagus dan harga yang terjangkau. So, buat kalian yang ingin memiliki barang yang berbau BT21 kuyy segera diorder karena barang terbatas
          </h4>
        </div>
      </form>
    </div>
    
    <div class="container">
		<ul class="nav nav-tabs">
        <li><a href="halmenuutama.php">All Product</a></li>
        <li><a href="sepatu.php">Sepatu</a></li>
        <li><a href="aksesoris.php">Aksesoris</a></li>
        <li><a href="baju.php">Baju</a></li> 
        <li><a href="boneka.php">Boneka</a></li>
        <li><a href="dll.php">Dan lain-lain</a></li>
		</ul>
 	  </div>
  
    <div class="container-fluid text-center bg-grey">
      <div class="row text-center">
      <div class="col-sm-3">
          <div class="thumbnail">
            <div class="panel panel-default text-center">
            <img src="bt21/Sepatu_4.jpeg" alt="Sepatu" width="400" height="300">
            <p><strong>Sepatu BT21 x Reebox(official)</strong></p>
            <p>
              <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 1.640.000</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <div class="panel panel-default text-center">
          <img src="bt21/Sepatu_1.jpeg" alt="Sepatu" width="400" height="300">
          <p><strong>Sepatu Anak Converse(official)</strong></p>
          <p>
            <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 110.000</a>
          </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <div class="panel panel-default text-center">
            <img src="bt21/Sepatu_5.jpeg" alt="Sepatu" width="400" height="300">
            <p><strong>Sepatu Converse Dewasa (Unofficial)</strong></p>
            <p>
              <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 175.000</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <div class="panel panel-default text-center">
            <img src="bt21/Sepatu_2.jpeg" alt="Sepatu" width="400" height="300">
            <p><strong>Sepatu Converse Dewasa (Unofficial)</strong></p>
            <p>
              <a class="btn btn-primary" href="#">Beli</a> <a class="btn" href="#">Rp 175.000</a>
            </p>
          </div>
        </div>
      </div>



    </div>
      <h2>TESTIMONI</h2>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>"Walaupun Unofficial, tapi kualitas nya superduper"<br><span>Nurhaliza, Bandung</span></h4>
          </div>
          <div class="item">
            <h4>"Shirt BT21 (official) nya benar-benar asli, di toko sebeleh Jual nya Official tapi yang datang unofficial"<br><span>Lusi, Jakarta Pusat</span></h4>
          </div>
          <div class="item">
            <h4>"Boneka led nya tidak ada yang cacat, sukaa banget"<br><span>Amel, Tanggerang</span></h4>
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Bandung, Jawa Barat</p>
          <p><span class="glyphicon glyphicon-phone"></span> +62 895371992390</p>
          <p><span class="glyphicon glyphicon-envelope"></span> novianasaila.hakim@gmail.com</p>
        </div>
      </div>
      <h4 class="teks">
        <center><b>© Copyright by 18111284_Noviana Saila Hakim_TIF RP 18 CIDA_UASWEB1</b></center>
      </h4>
    </div>
  </body>
</html>