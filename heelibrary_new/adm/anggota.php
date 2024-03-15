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
    <link rel='stylesheet' type='text/css' media='screen' href='../css/agt_ptg.css'>
</head>
<body>
    <h1>DATA ANGGOTA</h1>
    <table>
    <thead>
        <tr>
        <th scope ="col">ID User</th>
        <th scope ="col">Full Name</th>
        <th scope ="col">Email</th>
        <th scope ="col">Username</th>
        <th scope ="col">Level</th>
        <th scope ="col">Action</th>
        </tr>
        <?php 
        include '../koneksi/koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while ($d = mysqli_fetch_array($data)) {
        ?>
    </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo $d['IDuser'];?></td>
                <td><?php echo $d['fullname'];?></td>            
                <td><?php echo $d['email'];?></td>
                <td><?php echo $d['username'];?></td>
                <td><?php echo $d['level'];?></td>
            </tr>
            <?php
               }
            ?>
        </tbody>
    </table>

</body>
=======
include 'layout/header.php';
?>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/agt_adm.css">
   <body>
      <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <h2>Data Anggota</h2>
            <a href="data/tambah_ptg.php" class = "btn btn-success my-3">Tambah Petugas</a>
            <div class="col">
                <table>
                    <thead class ="table table-success">
                        <tr>
                            <th scope="col">ID User</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                        <?php
                        include '../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM user");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $d['IDuser'];?></td>
                                <td><?php echo $d['fullname'];?></td>
                                <td><?php echo $d['username'];?></td>
                                <td><?php echo $d['email'];?></td>
                                <td><?php echo $d['level'];?></td>
                                <td>
                                <a href="data/detail_agt.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-warning">Detail</a>
                                    <a href="data/edit_agt.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-primary">Edit</a>
                                    <a href="data/del_agt.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-danger">Delete</a>
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