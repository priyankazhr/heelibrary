<?php 
include '../../koneksi/koneksi.php';

$id = $_GET['idp'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE IDpinjam='$id'")or die(mysql_error());
 
header("location:../pmj.php");
?>