<?php
include 'layout/header.php';
?>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hee Library</title>
    <link rel="stylesheet" href="../css/bk_pmj.css">
   </head>
   <body>
   <div class="container">
        <h3>Daftar Buku</h3>
        <div class="row">
        <?php
            include '../koneksi/koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM buku Order by IDbuku asc" );

            while ($d = mysqli_fetch_array($data)) {
              
            
        ?>
        <div class="card" style="width: 15rem; margin: 12px;" >
            <img src="../ptg/asset/foto/<?php echo $d['foto'];?>" class="card-img-top" alt="...">
            <div class="card-body" >
                <h5 class="card-title"><?php echo $d ['judul']?></h5>
                <h6>Tahun Terbit : <?php echo $d ['tahunterbit']?></h6>
                <a href="data/detail.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-warning text-white">Detail</a>
                <a href="data/pinjam_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Pinjam</a>
            </div>
        </div>
        <?php
            }
        ?>
     </div>
  </div>
   </body>
</html>
