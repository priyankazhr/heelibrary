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
</html>