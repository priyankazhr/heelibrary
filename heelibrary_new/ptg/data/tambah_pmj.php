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
                        <h3>Form Tambah Peminjaman</h3>
                        <form action="t_pmj.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID User</label>
                            <input type="text" name="IDuser" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                            <input type="text" name="IDbuku" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                                    <input type="text" name="nama" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Pinjam</label>
                                        <input type="date" name="tgl_pinjam" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                             <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
                                        <input type="date" name="tgl_kembali" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Level</label>
                                <select class="form-control" name="status">
                                    <option selected>-Open this select menu-</option>
                                    <option value="dipinjam">Dipinjam</option>
                              </select>
                                </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                        <a href="../buku.php" class= "btn btn-danger m-2">Kembali</a>
                    </div>
                </div>
            </div>
  </body>
</html>