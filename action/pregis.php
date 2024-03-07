<?php
include '../koneksi/koneksi.php';

$fullname   = $_POST['fullname'];
$email      = $_POST['email'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$level      = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO user(fullname,email,username, password, level)
            VALUES('$fullname', '$email', '$username', '$password', '$level')");

header("location:../index.php");
            
?>