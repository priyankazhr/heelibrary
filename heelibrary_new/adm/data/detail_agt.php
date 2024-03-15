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
                    if (isset($_GET['iduser'])) {
                       $id = $_GET['iduser'];
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE IDuser='$id' ");
                    $result = mysqli_fetch_array($query);
                    ?>
                    <div class="col">
                                 <h2>Detail Anggota</h2> 
                                 <a href="../anggota.php" class="btn btn-danger">Kembali</a>
                                 <hr>
                        <table>
                        <tr>
                                <td><h5>ID Anggota </h5></td>
                                <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Full Name </h5></td>
                                <td><h5>: <?php echo $result['fullname'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Email </h5></td>
                                <td><h5>: <?php echo $result['email'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Username </h5></td>
                                <td><h5>: <?php echo $result['username'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Password </h5></td>
                                <td><h5>: <?php echo $result['password'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Level </h5></td>
                                <td><h5>: <?php echo $result['level'];?></h5></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
  </body>
</html>