<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link rel="stylesheet" href ='../../css/dtl.css'>
  </head>
  <body>
   
        <div class="container" style="margin-top: 5rem;">
            <div class="card">
                <div class="row m-4">
                    <?php 
                    include '../../koneksi/koneksi.php';    
                    if (isset($_GET['idp'])) {
                       $id = $_GET['idp'];
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE IDpinjam='$id' ");
                    $result = mysqli_fetch_array($query);
                    ?>
                    <div class="col">
                                 <h2>Detail Peminjaman</h2> 
                                 <a href="../pmj.php" class="btn btn-danger">Kembali</a>
                                 <hr>
                        <table>
                        <tr>
                                <td><h5>ID Peminjaman </h5></td>
                                <td><h5>: <?php echo $result['IDpinjam'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>ID User </h5></td>
                                <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>ID Buku </h5></td>
                                <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Nama Peminjam </h5></td>
                                <td><h5>: <?php echo $result['nama'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Tanggal Peminjaman </h5></td>
                                <td><h5>: <?php echo $result['tgl_pinjam'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Tanggal Pengembalian </h5></td>
                                <td><h5>: <?php echo $result['tgl_kembali'];?></h5></td>
                            </tr>
                            <tr class="bg-warning text-white">
                                <td><h5>Status Peminjaman </h5></td>
                                <td><h5>: <?php echo $result['status'];?></h5></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
  </body>
</html>