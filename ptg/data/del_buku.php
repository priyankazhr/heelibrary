<?php
include '../../koneksi/koneksi.php';
if (isset($idbuku)) {
    $idbuku = $_GET['IDbuku'];
}
mysqli_query($koneksi, "DELETE FROM buku WHERE IDbuku='$idbuku'");
?>