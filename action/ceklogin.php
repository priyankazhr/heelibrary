<?php
session_start();
include '../koneksi/koneksi.php';

$username   = $_GET['username'];
$password   = $_GET['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek >= 0){
    $data= mysqli_fetch_assoc($login);
}
if ($data['level'] == 'petugas') {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:../ptg/index_ptg.php");

} elseif ($data['level'] == 'admin') {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:../adm/index_adm.php");

} elseif ($data['level'] =='peminjam') {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:../pmj/index_pmj.php");
   
} else {
  
}

?>