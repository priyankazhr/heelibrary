<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laporan Data Buku</title>
<link rel="stylesheet" type="text/css" href="../../lpr_pj.css">
</head>
<body>
<div class="container">
            <div class="row">
            <div class="col text-center mb-3">
                <h3 class="judul">LAPORAN DATA ANGGOTA</h3>
                <h5 class="judul">APLIKASI PERPUSTAKAAN DIGITAL HEELIBRARY</h5>
                <span>Data merupakan keseluruhan data Buku di perpustakaan HEELibrary</span>
                </div>
            </div>
            <div class="row">
            <table class="table my-2">
        <thead class="table table-success">
            <tr>
            <th scope="col">ID Buku</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            </tr>
        </thead>
        <?php
        include '../../koneksi/koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM buku");
        while ($d = mysqli_fetch_array($data)) {
        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDbuku'];?></th>
            <td><?php echo $d['judul'];?></td>
            <td><?php echo $d['penulis'];?></td>
            <td><?php echo $d['penerbit'];?></td>
            <td><?php echo $d['tahunterbit'];?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
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
