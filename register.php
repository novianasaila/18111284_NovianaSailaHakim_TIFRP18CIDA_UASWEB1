<html>
    <head>
      <title>Halaman Register</title>
      <link rel="stylesheet" href="modul/css/bootstrap.min.css">
      <link rel="stylesheet" href="modul/css/login.css" type="text/css">
    </head>

  <body background="bt21/7.jpeg">
  <form action="config/register.php" method="POST">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <ul class="navbar-nav ml-md-auto">
              <li>
                <a href="index.php" class="btn btn-primary mr-3">Beranda</a>
                <a href="login.php" class="btn btn-primary m-3">Masuk</a>
                <a href="register.php" class="btn btn-primary mr-3">Daftar</a>
              </li>
            </ul> 
          </nav> 
        </div>
      </div>
        
      <div class="container">
        <div class="d-flex justify-content-center h-100">
          <div class="card">
            <div class="card-header">
              <h3><center><u>Register</u></center></h3> 
            </div>

            <div class="card-body">
              <form>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name ="username" class="form-control" placeholder="nama pengguna" required>
                </div>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name ="email" class="form-control" placeholder="email" required>
                </div>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name ="password" class="form-control" placeholder="kata sandi" required>
                </div>
                
                <div class="form-group">
                  <button type="submit"  name ="register" class="btn float-right login_btn">Register</button>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-center links">
                Sudah punya akun?<a href="login.php">Login</a>
              </div>

              <h7><center>© Copyright by 18111284_Noviana Saila Hakim_TIF RP 18 CIDA_UASWEB1</center></h7>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>