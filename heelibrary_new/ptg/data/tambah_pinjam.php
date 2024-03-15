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
                <h1>Tambah Peminjaman</h1>
                </div>
                <div class="row">
                    <form action="t_pinjam.php" method="post">
                    <div class="mb-3">
                            <label for="IDuser" class="form-label">ID Peminjam</label>
                            <input type="text" class="form-control" name="IDuser" required id="IDuser">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="IDbuku" class="form-label">ID Buku</label>
                            <input type="text" class="form-control" name="IDbuku" required id="IDbuku">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control" name="nama" required id="nama">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                            <input type="date" class="form-control" name="tgl_pinjam" required id="tgl_pinjam">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control" name="tgl_kembali" required id="tgl_kembali">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="status" class="option-select">Status Peminjaman</label>
                            <select name="status" id="status">
                                <option selected>-Select this Option-</option>
                                <option value="dipinjam">Dipinjam</option>
                            </select>
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