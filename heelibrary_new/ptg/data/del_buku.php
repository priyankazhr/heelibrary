<<<<<<< HEAD
<?php
include '../../koneksi/koneksi.php';
if (isset($idbuku)) {
    $idbuku = $_GET['IDbuku'];
}
mysqli_query($koneksi, "DELETE FROM buku WHERE IDbuku='$idbuku'");
=======
<?php 
include '../../koneksi/koneksi.php';

$id = $_GET['idbuku'];

mysqli_query($koneksi, "DELETE FROM buku WHERE IDbuku='$id'")or die(mysql_error());
 
header("location:../buku.php");
>>>>>>> 174d494 (Mengupload update dan perbaikan hasil ujikom 2024)
?>