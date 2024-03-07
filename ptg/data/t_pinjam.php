<?php
include '../../koneksi/koneksi.php';

$iduser         = $_POST['IDuser'];
$idbuku         = $_POST['IDbuku'];
$nama           = $_POST['nama'];
$tanggalpinjam  = $_POST['tgl_pinjam'];
$tanggalkembali = $_POST['tgl_kembali'];
$status         = $_POST['status'];

mysqli_query($koneksi, "INSERT INTO peminjaman
        VALUES('$iduser','$idbuku', '$nama','$tanggalpinjam','$tanggalkembali','$status')"); 

header("location:../pmjm.php");

?>