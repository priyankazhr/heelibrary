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
                        <h3>Form Tambah Buku</h3>
                        <?php
                            include '../../koneksi/koneksi.php';
                            $id = $_GET['idp']; 
                            $data = mysqli_query($koneksi, "SELECT * from peminjaman where IDpinjam='$id'");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <form action="e_pmj.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID Peminjaman</label>
                            <input type="text" name="IDPinjam" class="form-control" value="<?php echo $d['IDpinjam'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID User</label>
                            <input type="text" name="IDuser" class="form-control" value="<?php echo $d['IDuser'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                            <input type="text" name="IDbuku" class="form-control" value="<?php echo $d['IDbuku'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $d['nama'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Pinjam</label>
                                        <input type="date" name="tgl_pinjam" class="form-control" value="<?php echo $d['tgl_pinjam'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                             <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
                                        <input type="date" name="tgl_kembali" class="form-control" value="<?php echo $d['tgl_kembali'];?>" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Level</label>
                                <select class="form-control" name="status" value="<?php echo $d['status'];?>">
                                    <option selected>-Open this select menu-</option>
                                    <option value="dipinjam">Dipinjam</option>
                                    <option value="kembali">Dikembalikan</option>
                              </select>
                                </div>
                        <button type="submit" name="update" class="btn btn-primary">Tambah</button>
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