<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laporan Data Anggota</title>
<link rel="stylesheet" type="text/css" href="../../lpr_pj.css">
</head>
<body>
<div class="container">
            <div class="row">
            <div class="col text-center mb-3">
                <h3 class="judul">LAPORAN DATA ANGGOTA</h3>
                <h5 class="judul">APLIKASI PERPUSTAKAAN DIGITAL HEELIBRARY</h5>
                <span>Data merupakan keseluruhan data Anggota dari aplikasi perpustakaan HEELibrary</span>
            </div>
            </div>
            <div class="row">
            <table class="table my-3">
                <thead class="table table-success">
                    <tr>
                    <th scope="col">ID User</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Level</th>
                    </tr>
                </thead>
                <?php
                include '../../koneksi/koneksi.php';

                $data = mysqli_query($koneksi, "SELECT * FROM user");
                while ($d = mysqli_fetch_array($data)) {
                
                ?>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $d['IDuser'];?></th>
                    <td><?php echo $d['fullname'];?></td>
                    <td><?php echo $d['email'];?></td>
                    <td><?php echo $d['username'];?></td>
                    <td><?php echo $d['password'];?></td>
                    <td><?php echo $d['level'];?></td>
            
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
