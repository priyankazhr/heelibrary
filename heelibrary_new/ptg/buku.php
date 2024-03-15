<?php
<<<<<<< HEAD
    include 'layout/header.php';
?>

<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary Dashboard Petugas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bk_ptg.css'>
</head>
<body>
    <h1>DATA BUKU</h1>
    <a href="data/tambah_buku.php" class="btn btn-info">Tambah Buku</a>
    <table>
    <thead>
        <tr>
        <th scope ="col">ID Buku</th>
        <th scope ="col">Judul Buku</th>
        <th scope ="col">Penulis</th>
        <th scope ="col">Penerbit</th>
        <th scope ="col">Tahun Terbit</th>
        <th scope ="col">Action</th>
        </tr>
        <?php 
        include '../koneksi/koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM buku");
        while ($d = mysqli_fetch_array($data)) {
        ?>
    </thead>
        <tbody>
            <tr>
            <td scope="row"><?php echo $d['IDbuku'];?></td>
                <td><?php echo $d['judul'];?></td>            
                <td><?php echo $d['penulis'];?></td>
                <td><?php echo $d['penerbit'];?></td>
                <td><?php echo $d['tahunterbit'];?></td>
                <td>
                <a href="data/detail_buku.php" class="btn btn-primary">Detail</a>
                <a href="data/edit_buku.php" class="btn btn-warning">Edit</a>
                <a href="data/del_buku.php?idbuku<?php echo $d['IDbuku'];?>" class="btn btn-Danger">Delete</a>
                </td> 
            </td>   
            </tr>
        </tbody>
    </table>
    <?php 
        }
    ?>
</body>
=======
include 'layout/header.php';
?>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hee Library</title>
    <link rel="stylesheet" href="../css/bk_ptg.css">
   </head>
   <body>
      <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <h2>Data Buku</h2>
            <a href="data/tambah_buku.php" class = "btn btn-success my-3">Tambah Buku</a>
            <div class="col">
                <table>
                    <thead class ="table table-success">
                        <tr>
                            <th scope="col">ID Buku</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun terbit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                        <?php
                        include '../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $d['IDbuku'];?></td>
                                <td><?php echo $d['judul'];?></td>
                                <td><?php echo $d['penulis'];?></td>
                                <td><?php echo $d['penerbit'];?></td>
                                <td><?php echo $d['tahunterbit'];?></td>
                                <td>
                                <a href="data/detail_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-warning">Detail</a>
                                    <a href="data/edit_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Edit</a>
                                    <a href="data/del_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-danger">Delete</a>
                                </td>
                             </td>
                            </tr>
                        </tbody>
                        <?php
                              }
                        ?>
                </table>
            </div>
        </div>
      </div>
   </body>
>>>>>>> 174d494 (Mengupload update dan perbaikan hasil ujikom 2024)
</html>