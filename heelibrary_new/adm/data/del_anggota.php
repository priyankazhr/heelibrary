<?php
include '../../koneksi/koneksi.php';
if (isset($iduser)) {
    $iduser = $_GET['IDuser'];
}
mysqli_query($koneksi, "DELETE FROM user WHERE IDuser='$iduser'");
?>