<?php
require_once "koneksi.php";
require_once  "../session.php";
// print_r($_POST);exit;
$username = $_SESSION["username"];
$isi_komentar = $_POST["isikomentar"];
$q = $database_connection ->prepare ("INSERT INTO `tb_komentar` (`id_komentar`,  `isi_komentar`, `username`) VALUES (NULL, ?, ?)");
$q->execute ([$isi_komentar, $username]);
header("Location: ../edit_profile.php");
?>