<?php
include '../../koneksi/koneksi.php';

$iduser = $_POST['IDuser'];
$idbuku = $_POST['IDbuku'];
$nama = $_POST['nama'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$status = $_POST['status'];

mysqli_query($koneksi, "INSERT INTO peminjaman
            VALUES('', '$iduser', '$idbuku', '$nama', '$tgl_pinjam', '$tgl_kembali', '$status') ");
header ("location:../pmj.php");

?>