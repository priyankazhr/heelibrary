<?php
include 'layout/header.php';
?>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hee Library</title>
    <link rel="stylesheet" href="../css/pmj_ptg.css">
   </head>
   <body>
      <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <h2>Data Peminjaman</h2>
            <a href="data/tambah_pmj.php" class = "btn btn-success my-3">Tambah Peminjam</a>
            <div class="col">
                <table>
                    <thead class ="table table-success">
                        <tr>
                            <th scope="col">ID Peminjaman</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Status Peminjaman</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                        <?php
                        include '../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $d['IDpinjam'];?></td>
                                <td><?php echo $d['nama'];?></td>
                                <td><?php echo $d['status'];?></td>
                                <td>
                                    <a href="data/detail_pmj.php?idp=<?php echo $d['IDpinjam'];?>" class="btn btn-warning">Detail</a>
                                    <a href="data/edit_pmj.php?idp=<?php echo $d['IDpinjam'];?>" class="btn btn-primary">Edit</a>
                                    <a href="data/del_pmj.php?idp=<?php echo $d['IDpinjam'];?>" class="btn btn-danger">Delete</a>
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
</html>