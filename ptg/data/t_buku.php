<?php
include '../../koneksi/koneksi.php';

$judul          = $_POST['judul'];
$penulis        = $_POST['penulis'];
$penerbit       = $_POST['penerbit'];
$tahunterbit    = $_POST['tahunterbit'];
$Foto           = $_FILES['foto']['name'];
$file           = $_FILES['foto']['name_tmp'];

move_uploaded_file($file, '../asset/sampul/' .$Foto);

mysqli_query($koneksi, "INSERT INTO buku
        VALUES('$judul', '$penulis', '$penerbit', '$tahunterbit', '$Foto', '$file')"); 

header("location:../buku.php");

?>