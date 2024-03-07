<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary Dashboard Petugas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/pmj_ptg.css'>
</head>
<body>
    <h1>DATA PEMINJAMAN BUKU</h1>
    <table>
    <thead>
        <tr>
        <th scope ="col">ID Pinjam</th>
        <th scope ="col">ID Buku</th>
        <th scope ="col">Nama Peminjam</th>
        <th scope ="col">Tanggal Peminjaman</th>
        <th scope ="col">Tanggal Pengembalian</th>
        <th scope ="col">Status Peminjaman</th>
        </tr>
        <?php 
        include '../../koneksi/koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
        while ($d = mysqli_fetch_array($data)) {
        ?>
    </thead>
        <tbody>
            <tr>
            <td scope="row"><?php echo $d['IDpinjam'];?></td>
                <td><?php echo $d['IDbuku'];?></td>            
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['tgl_pinjam'];?></td>
                <td><?php echo $d['tgl_kembali'];?></td>
                <td><?php echo $d['status'];?></td>
            </tr>
        </tbody>
    </table>
    <?php 
        }
    ?>
</body>
</html>


