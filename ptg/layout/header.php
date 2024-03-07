<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary -Staff Page-</title>
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
            gap: 5rem;
        }
        nav ul li a {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: large;
            color: black;
            margin-right: 10px;
            display: flex;
            border-bottom: 4px white;
            transition: all;
            transition-duration: 400ms;
        }

        nav ul li a:hover{
            background-color: rgba(214, 198, 198, 0.678);
            justify-content: center;
            border-bottom: 4px white;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="../ptg/index_ptg.php">Dashboard</a>
            </li>
            <li>
                <a href="../ptg/anggota.php">Data Anggota</a>
            </li>
            <li>
                <a href="../ptg/buku.php">Data Buku</a>
            </li>
            <li>
                <a href="../ptg/pmjm.php">Data Peminjaman</a>
            </li>
            <li>
                <a href="../logout.php">Logout</a>
            </li>
        </ul>
    </nav>
</body>
</html>

                
                
                