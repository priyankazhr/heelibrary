<?php
<<<<<<< HEAD
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

=======

include '../../koneksi/koneksi.php';
 
$judul       = $_POST['judul'];
$penulis     = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
$Foto        = $_FILES['foto']['name'];
$file        = $_FILES['foto']['tmp_name'];


move_uploaded_file($file_tmp, '../asset/foto/' .$Foto);
mysqli_query($koneksi,"INSERT into buku 
                        values('', '$judul','$penulis','$penerbit','$tahunterbit','$Foto') ");
 
>>>>>>> 174d494 (Mengupload update dan perbaikan hasil ujikom 2024)
header("location:../buku.php");

?>