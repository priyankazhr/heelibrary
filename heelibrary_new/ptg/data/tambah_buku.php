<<<<<<< HEAD
<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/tambahform.css'>
</head>
<body>
    <div class="container">
        <div class="conten">
        <div class="card">
            <div class="row">
                <h1>Tambah Buku</h1>
                </div>
                <div class="row">
                    <form action="t_buku.php" method="post">
                    <div class="mb-3">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" required id="fullname">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" name="penulis" required id="email">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" required id="username">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                            <input type="tahunterbit" class="form-control" name="tahunterbit" required id="password">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="foto" class="multiple-files">Cover Buku</label>
                            <input type="file" class="form-control" name="foto" required id="foto">
                        </div>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                        <a href="../buku.php" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</body>
=======
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
                        <form action="t_buku.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                            <input type="text" name="penulis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                                    <input type="text" name="penerbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                        <input type="text" name="tahunterbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                             <div class="input-group mb-3">
                                <label for="formFileMultiple" class="form-label">Cover Buku</label>
                                <input class="form-control" name="foto" type="file" id="formFileMultiple" multiple>
                            </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                         <a href="../buku.php" class= "btn btn-danger m-2">Kembali</a>
                    </div>
                </div>
            </div>
  </body>
>>>>>>> 174d494 (Mengupload update dan perbaikan hasil ujikom 2024)
</html>