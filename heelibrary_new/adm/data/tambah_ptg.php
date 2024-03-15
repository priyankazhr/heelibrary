<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Petugas</title>
    <link rel="stylesheet" href="../../css/tbh_bkpj.css">
  </head>
  <body>
        <div class="container">
            <div class="card" style="margin-top: 4rem;">
                <div class="row m-4">
                    <div class="col-sm-7">
                        <h3>Form Tambah Peminjaman</h3>
                        <form action="t_ptg.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="fullname" required id="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" required id="email">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" required id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required id="password">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select class="form-control" name="level">
                            <option selected>-Select this Option-</option>
                                <option value="petugas">Petugas</option>
                                <option value="admin">Admin</option>
                                <option value="peminjam">Pengguna</option>
                              </select>
                        </div>
                        <button type="submit" class= "btn btn-primary">Submit</button>
                        </form>
                        <a href="../anggota.php" class= "btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
  </body>
</html>