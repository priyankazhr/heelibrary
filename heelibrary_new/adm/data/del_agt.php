<?php 
include '../../koneksi/koneksi.php';

$id = $_GET['iduser'];

mysqli_query($koneksi, "DELETE FROM user WHERE IDuser='$id'")or die(mysql_error());
 
header("location:../anggota.php");
?>