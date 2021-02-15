<?php
require_once  "koneksi.php";
require_once  "../session.php";
// print_r($_FILES['file']);exit;
$username = $_SESSION['username'];
$namafile = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

// echo $namafile;exit;

if($username == ""){
    echo "tidak bisa upload file";
}else{
    move_uploaded_file($tmp_name, "../image/".$namafile);
    $q = $database_connection->prepare("UPDATE `tb_user` SET `gambar` = ? WHERE `username` = ?");
$q->execute(["image/".$namafile,$username]);
header("Location: ../edit_profile.php");
}

?>