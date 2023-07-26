<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAL Rent</title>
    <link rel="stylesheet" href="css/style2.css"/>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
        <div class="main-admin">
        <h1>Admin KAL Motor</h1>
        <br>
        <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pesan</th>
            <th>Kendaraan</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect('localhost', 'root', '', 'db_jasa');

        // Mengecek koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Mengambil data dari database
        $query = mysqli_query($conn, "SELECT * FROM userinfodata");
        $id = 1;
        while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>" . $id++ . "</td>";
            echo "<td>" . $data['user'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td>" . $data['pesan'] . "</td>";
            echo "<td>" . $data['kendaraan'] . "</td>";
            echo "<td><a href='edit.php?id=" . $data['id'] . "'>Edit</a> | <a href='delete.php?id=" . $data['id'] . "'>Hapus</a></td>";
            echo "</tr>";
        }

        // Menutup koneksi database
        mysqli_close($conn);
        ?>
    </table>
    <br>
    <a class="button2" href="add.php">Tambah Data</a>
        </div>
    </section>