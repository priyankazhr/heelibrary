<?php
session_start();
include '../koneksi/koneksi.php';

<<<<<<< HEAD
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

=======
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if ($data['level']=="petugas") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        header("location:../ptg/index_ptg.php");

    }elseif  ($data['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:../adm/index_adm.php");

    }elseif  ($data['level']=="peminjam") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "peminjam";
        header("location:../pmj/index_pmj.php");
    }else {
        header("location:../index.php?pesan=gagal");                                                                                                                                        
    }
}
>>>>>>> 174d494 (Mengupload update dan perbaikan hasil ujikom 2024)
?>