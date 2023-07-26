<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbarui Data Pelanggan</title>
    <link rel="stylesheet" href="css/style2.css"/>
    <link rel="shortcut icon" href="images/icon.png">
</head>
<body>
    <header class="main">
        <nav>
            <a href="index.php" class="logo">
                <img src="images/logo4.png"/>
            </a>

            <ul class="menu">
                <li><a href="index.php">Beranda</a></a></li>
                <li><a href="#features">Fitur</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="admin2.php">Edit</a></li>
                <a class="button" href="index.php">Logout</a>
            </ul>            
        </nav>
    </header>
</head>
    <section class="home" id = "home">
    <div class="main-edit"> 
        <h1>Edit Data Rental Motor</h1>
    <?php
    // Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'db_jasa');

    // Mengecek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Mengambil data yang akan diedit
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM userinfodata WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
    ?>
    <form action="process_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama Pelanggan:</label>
        <input type="text" name="user" value="<?php echo $data['user']; ?>" required>
        <br><br>
        <label>Merk:</label>
        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required>
        <br><br>
        <label>Tahun:</label>
        <input type="text" name="pesan" value="<?php echo $data['pesan']; ?>" required>
        <br><br>
        <label>kendaraan</label>
        <input type="text" name="kendaraan" value="<?php echo $data['kendaraan']; ?>" required>
        <br><br>
        <input type="submit" value="Update">
    </form>
    <?php
    // Menutup koneksi database
    mysqli_close($conn);
    ?>
    </div>
    </section>
</body>
</html>
