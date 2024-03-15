<?php 
include '../../koneksi/koneksi.php';

if(isset($_POST['update']))
{
$id      = $_POST['idp'];
$iduser  = $_POST['IDuser'];
$idbuku  = $_POST['IDbuku'];
$nama    = $_POST['nama'];
$tgl_pinjam    = $_POST['tgl_pinjam'];
$tgl_kembali   = $_POST['tgl_kembali'];
$status        = $_POST['status'];

$query = mysqli_query ($koneksi, "UPDATE peminjaman SET IDuser='$iduser', IDbuku='$idbuku', nama='$nama', 
                tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', status='$status'  WHERE IDpinjam='$id'");
if ($query) {
   header("location:../buku.php");
}else {
    echo "Error :" . mysqli_error($koneksi);
}

header("location:../buku.php");
}
?>
