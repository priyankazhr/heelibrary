<?php 
include '../../koneksi/koneksi.php';

if(isset($_POST['update']))
{
$id      = $_POST['IDuser'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = mysqli_query ($koneksi, "UPDATE user SET fullname='$fullname', email='$email', username='$username', 
                password='$password', level='$level' WHERE IDuser='$id'");
if ($query) {
   header("location:../anggota.php");
}else {
    echo "Error :" . mysqli_error($koneksi);
}

header("location:../anggota.php");
}
?>
