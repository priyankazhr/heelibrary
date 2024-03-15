<?php
include '../koneksi/koneksi.php';

<<<<<<< HEAD
$fullname   = $_POST['fullname'];
$email      = $_POST['email'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$level      = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO user(fullname,email,username, password, level)
            VALUES('$fullname', '$email', '$username', '$password', '$level')");

header("location:../index.php");
            
?>
=======
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO user(fullname,email,username, password, level)
                VALUES('$fullname','$email','$username','$password','$level')");
                    
header("location:../index.php");

?>
>>>>>>> 174d494 (Mengupload update dan perbaikan hasil ujikom 2024)
