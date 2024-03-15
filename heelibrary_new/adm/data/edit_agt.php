<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="../../css/tbh_bkpj.css">
  </head>
  <body>
        <div class="container">
            <div class="card" style="margin-top: 4rem;">
                <div class="row m-4">
                    <div class="col-sm-7">
                        <h3>Form Edit Anggota</h3>
                        <?php
                            include '../../koneksi/koneksi.php';
                            $id = $_GET['iduser']; 
                            $data = mysqli_query($koneksi, "SELECT * from user where IDuser='$id'");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <form action="e_agt.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID User</label>
                            <input type="text" name="IDuser" class="form-control" value="<?php echo $d['IDuser'];?>" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control" value="<?php echo $d['fullname'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $d['email'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $d['username'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Password</label>
                                        <input type="text" name="password" class="form-control" value="<?php echo $d['password'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                             </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <select class="form-control" name="level" value="<?php echo $d['level'];?>">
                                    <option selected>-Open this select menu-</option>
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                    <option value="peminjam">Pengguna</option>
                              </select>
                                </div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                        <?php
                            }
                        ?>
                        <a href="../pmj.php" class= "btn btn-danger m-2">Kembali</a>
                    </div>
                </div>
            </div>
  </body>
</html>