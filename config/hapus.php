<?php
require_once "koneksi.php";
// print_r($_GET);exit;
$id_komentar = $_GET["id"];
//echo $id_komentar;
$q = $database_connection ->prepare ("DELETE FROM `tb_komentar` WHERE `tb_komentar`.`id_komentar` = ? ");
$q->execute ([$id_komentar]);
header("Location: ../edit_profile.php");
?>