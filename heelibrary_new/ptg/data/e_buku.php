<?php 
include '../../koneksi/koneksi.php';

if(isset($_POST['update']))
{
$id          = $_POST['IDbuku'];
$judul       = $_POST['judul'];
$penulis     = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];

$query = mysqli_query ($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', 
                tahunterbit='$tahunterbit' WHERE IDbuku='$id'");
if ($query) {
   header("location:../buku.php");
}else {
    echo "Error :" . mysqli_error($koneksi);
}

header("location:../buku.php");
}
?>
