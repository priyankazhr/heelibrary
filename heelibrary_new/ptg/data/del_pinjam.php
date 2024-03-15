<?php
include '../../koneksi/koneksi.php';
if (isset($idp)) {
    $idp = $_GET['IDpeminjaman'];
}
mysqli_query($koneksi, "DELETE FROM peminjaman WHERE IDpeminjaman='$idp'");
?>