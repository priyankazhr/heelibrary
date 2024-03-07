<?php
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
</html>