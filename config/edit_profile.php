<?php
require_once "koneksi.php";
$username = $_POST["username"];
$email= $_POST["email"];
$no_tlp= $_POST["no_tlp"];
$kota_lahir= $_POST["kota_lahir"];
$tgl_lahir= $_POST["tgl_lahir"];
$alamat= $_POST["alamat"];


$q = $database_connection ->prepare ("UPDATE `tb_user` SET `username` = ?, `email` = ?, `no_tlp` = ?, `kota_lahir` = ?, `tgl_lahir` = ?, `alamat` = ? WHERE `tb_user`.`username` = ?;");
$q->execute ([$username, $email, $no_tlp, $kota_lahir, $tgl_lahir, $alamat, $username]);
header("Location: ../edit_profile.php");
?>