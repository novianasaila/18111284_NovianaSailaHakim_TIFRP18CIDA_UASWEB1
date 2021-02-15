<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <link rel="stylesheet" href="modul/css/bootstrap.min.css">
  <link rel="stylesheet" href="modul/css/login.css" type="text/css"> 

</head>
<body background="bt21/7.jpeg">
<form action="config/login.php" name="form" method="POST">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <ul class="navbar-nav ml-md-auto">
            <li>
                <a href="index.php" class="btn btn-primary mr-3">Beranda</a>
                <a href="login.php" class="btn btn-primary m-3">Masuk</a>
                <a href="register.php" class="btn btn-primary mr-3">Daftar</a>
          </ul>
            </li>
          </nav> 
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3><center><u>LOGIN</u></center></h3>
        </div>
        <div class="card-body">
          <form action="halmenuutama.php" method="get" id="myForm" onsubmit=" return validasi()">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
                <!-- <input type="text" name="username" placeholder="username"> -->
              <input type="text" name="username" class="form-control" placeholder="nama pengguna" required>
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
                <input type="password" name="password" class="form-control" placeholder="kata sandi"required>
              </div>
              
              <div class="row align-items-center remember">
                <center><input type="checkbox" required>Ingat Saya</center>
              </div>
                <center><button type="submit"  name ="login" class="btn float-right login_btn">Login</button>
               </center>
        </div>
        
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            <center>Belum punya akun? <a href="register.php">Daftar</a></center>
          </div>
          <div class="d-flex justify-content-center">
              <center><a href="#">Lupa kata sandi?</a></center>
          </div>
        
        </div>
            </from>
      </div>
    </div>
  </div>
  
  <h6 class="teks">
    <center><b>© Copyright by 18111284_Noviana Saila Hakim_TIF RP 18 CIDA_UASWEB1</b></center>
  </h6>
</body>
<script type="text/javascript">
  function validasi(){
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;
    if( username == "noviana" && password == "12345678"){
      return true;
    }
    else if(username =="" || password ==""){
      alert("Masukan username dan password Anda");
      return false;
    }
    else{
      alert("Username atau Password yang Anda masukan 'Salah'");
      return false;
    }
  }
</script>
</html>