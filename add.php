<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pelanggan</title>
    <link rel="stylesheet" href="css/style2.css"/>
    <link rel="shortcut icon" href="images/icon.png">
</head>
<body>
    <header class="main">
        <nav>
            <a href="indexadmin.php" class="logo">
                <img src="images/logo4.png"/>
            </a>

            <ul class="menu">
                <li><a href="indexadmin.php">Beranda</a></a></li>
                <li><a href="indexadmin.php#features">Fitur</a></li>
                <li><a href="indexadmin.php#about">Tentang</a></li>
                <li><a href="admin2.php">Edit</a></li>
                <a class="button" href="index.php">Logout</a>
            </ul>            
        </nav>
    </header>

    <section class="home" id = "home">
        <div class="main-add"> 
            <h1>Tambah Data Rental Motor</h1>
            <form action="process_add.php" method="POST">
            <label>Nama:</label>
            <input type="text" name="user" required>
            <br><br>
            <label>Alamat:</label>
            <input type="text" name="alamat" required>
            <br><br>
            <label>Pesan:</label>
            <input type="text" name="pesan" required>
            <br><br>
            <label>Kendaraan:</label>
            <input type="text" name="kendaraan" required>
            <br><br>
            <input type="submit" value="Simpan">
        </form>
        </div>
    </section>
</body>
</html>
