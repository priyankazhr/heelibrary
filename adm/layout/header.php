<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary -Admin Page-</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>

        nav {
            background-color: rgb(216, 112, 112);
            height: 50px;
            display: flex;
            box-sizing: border-box;
        }
        nav ul {
            display: flex;
            justify-content: space-between;
            text-align: center;
            border-bottom: black;
        }
        nav ul li a {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: large;
            color: black;
            margin-right: 10px;
            display: flex;
            
        }
        ul li:hover{
            background-color: rgba(38, 29, 29, 0.546);
            height: 30px;
            justify-content: center;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="../adm/index_adm.php">Dashboard</a>
            </li>
            <li>
                <a href="../adm/anggota.php">Data Anggota</a>
            </li>
            <li>
                <a href="../adm/buku.php">Data Buku</a>
            </li>
            <li>
                <a href="../adm/pmjm.php">Data Peminjaman</a>
            </li>
            <li>
                <a href="../adm/laporan.php">Laporan</a>
            </li>
            <li>
                <a href="../logout.php">Logout</a>
            </li>
        </ul>
    </nav>
</body>
</html>

                
                
                