<<<<<<< HEAD
<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary Dashboard Petugas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/pmj_ptg.css'>
</head>
<body>
    <h1>DATA PEMINJAMAN BUKU</h1>
    <table>
    <thead>
        <tr>
        <th scope ="col">ID Pinjam</th>
        <th scope ="col">ID Buku</th>
        <th scope ="col">Nama Peminjam</th>
        <th scope ="col">Tanggal Peminjaman</th>
        <th scope ="col">Tanggal Pengembalian</th>
        <th scope ="col">Status Peminjaman</th>
        </tr>
        <?php 
        include '../../koneksi/koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
        while ($d = mysqli_fetch_array($data)) {
        ?>
    </thead>
        <tbody>
            <tr>
            <td scope="row"><?php echo $d['IDpinjam'];?></td>
                <td><?php echo $d['IDbuku'];?></td>            
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['tgl_pinjam'];?></td>
                <td><?php echo $d['tgl_kembali'];?></td>
                <td><?php echo $d['status'];?></td>
            </tr>
        </tbody>
    </table>
    <?php 
        }
    ?>
</body>
</html>


=======
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laporan Data Anggota</title>
<link rel="stylesheet" type="text/css" href="../../lpr_pj.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col text-center mb-3">
                <h3 class="judul">LAPORAN DATA PEMINJAMAN BUKU</h3>
                <h5 class="judul">APLIKASI PERPUSTAKAAN DIGITAL HEELIBRARY</h5>
                <span>Data merupakan keseluruhan data Peminjaman buku di HEELibrary</span>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Peminjaman</th>
                        <th scope="col">ID User</th>
                        <th scope="col">ID Buku</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tanggal Peminjaman</th>
                        <th scope="col">Tanggal Pengembalian</th>
                        <th scope="col">Status Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../koneksi/koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $d['IDpinjam'];?></th>
                        <td><?php echo $d['IDuser'];?></td>
                        <td><?php echo $d['IDbuku'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['tgl_pinjam'];?></td>
                        <td><?php echo $d['tgl_kembali'];?></td>
                        <td><?php echo $d['status'];?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col">
                <p style="line-height: 1rem;">Mengetahui :</p>
                <p>Kepala Pusat HeeLibrary</p>
                <p style="margin-top: 5rem;"><b>Priyanka</b></p>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
>>>>>>> 174d494 (Mengupload update dan perbaikan hasil ujikom 2024)
