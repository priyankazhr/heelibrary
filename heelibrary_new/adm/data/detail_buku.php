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
                    if (isset($_GET['idbuku'])) {
                       $id= $_GET['idbuku'];
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$id' ");
                    $result = mysqli_fetch_array($query);
                    ?>
                    <div class="col" style="margin-top: 5rem;">
                                 <h2>Detail Buku</h2> 
                                 <a href="../buku.php" class="btn btn-danger">Kembali</a>
                                 <hr>
                        <table>
                        <tr>
                                <td><h5>ID Buku </h5></td>
                                <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Judul Buku </h5></td>
                                <td><h5>: <?php echo $result['judul'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Penulis Buku </h5></td>
                                <td><h5>: <?php echo $result['penulis'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Penerbit Buku </h5></td>
                                <td><h5>: <?php echo $result['penerbit'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Tahun Terbit </h5></td>
                                <td><h5>: <?php echo $result['tahunterbit'];?></h5></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
  </body>
</html>