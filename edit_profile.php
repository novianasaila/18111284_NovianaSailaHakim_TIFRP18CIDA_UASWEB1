<?php
include 'session.php';
// echo $_SESSION['username'];exit;
$idreg = $_SESSION["username"];
require_once 'config/koneksi.php';

// echo $idreg;exit;
try{
$sql = "SELECT * FROM tb_user WHERE tb_user.username=?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $iduser = $row['id_user'];
    $username = $row['username'];
    $email = $row['email'];
    $no_tlp = $row['no_tlp'];
    $gambar = $row['gambar'];    
    $kotalahir = $row['kota_lahir'];
    $tanggallahir = $row['tgl_lahir'];
    $alamat = $row['alamat'];  
    
}


?>
<html>
<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet"/>
<link rel="stylesheet" href="modul/css/menuutama.css" type="text/css">

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button> -->
          <a class="navbar-brand" href="halmenuutama.php">BT21</a>
        </div>
        <div class>
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

<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <div class="col-md-3 border-right">
      <form action='config/upload.php' method='POST' enctype='multipart/form-data'>
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
          <img class="mt-5" src="<?=$gambar?>" width="150">
          <span class="font-weight-bold"><?=$username?></span>
          <span class="text-black-50"><?=$email?></span>
          <div>
            <input type="file" name="file">
          </div>
          <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Picture</button></div>

                <span> </span></div>
                </form>
          </div>
            
            <div class="col-md-5 border-right">
            <form action='config/edit_profile.php' method='POST'>
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">EDIT PROFILE</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="username" value="<?=$row['username']?>" name="username"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" value="<?=$row['email']?>" name="email" ></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">No.telpon</label><input type="text" class="form-control" placeholder="No.tlp" value="<?=$row['no_tlp']?>" name="no_tlp" ></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text" class="form-control" placeholder="tempat lahir" value="<?=$row['kota_lahir']?>" name="kota_lahir"></div>
                        <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control" value="<?=$row['tgl_lahir']?>" name="tgl_lahir"></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat" value="<?=$row['alamat']?>" name="alamat"></div>
                    </div>              
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </form>
            </div>
            
        </div>
    
</div>
</div>
</div>
</html>

<?php
// include 'session.php';
require_once 'config/koneksi.php';
$idreg = $_SESSION['username'];
// echo $idreg;exit;
try{
$sql = "SELECT * FROM tb_komentar WHERE username = ?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id_komentar = $row['id_komentar'];
    $isi_komentar = $row['isi_komentar'];
    $username = $row['username'];
   }
?>

    Silahkan Berkomentar<hr/><br/>
<div class="row">
<div class="col-md-6">
<form action='config/komentar.php' method='POST'>
<table>
       <tr>
         <td>Tulis komentar:</td>
         <td><textarea cols="30" rows="5" name="isikomentar"></textarea></td>
       </tr>
       <tr>
         <td><input type="submit" value="Postkan Komentar"/></td>
         <td><input type="reset" value="hapus"></td>
        </tr>
</table>
</form>
</div>
<div class="col-md-6">
<?php
 if(isset($isi_komentar)){

 
?>
<?=$isi_komentar?>
<a href="<?='config/hapus.php?id='.$id_komentar?>"> Hapus Komentar</a>

<?php } ?>
</div>

</div>    

<h4 class="teks">
        <center><b>© Copyright by 18111284_Noviana Saila Hakim_TIF RP 18 CIDA_UASWEB1</b></center>
      </h4>