<?php
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
<<<<<<< HEAD
    <h1>DATA KESELURUHAN BUKU</h1>
    <table>
    <thead>
        <td scope ="col">ID Buku</td>
        <td scope ="col">Judul Buku</td>
        <td scope ="col">Penulis</td>
        <td scope ="col">Penerbit</td>
        <td scope ="col">Tahun Terbit</td>
        <td scope ="col">Action</td>
    </thead>
       
        <tbody>
            <tr>
                    
            </tr>
        </tbody>
    </table>
   
</body>
=======
      <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <h2>Data Buku</h2>
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