<?php
$connection = mysqli_connect('localhost', 'root', '', 'db_jasa');

mysqli_select_db($connection, "db_jasa");

$user = $_POST['user'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];
$selectedvehicle = $_POST['vehicle'];

// Validasi form, pastikan semua field telah diisi
if (empty($user) || empty($alamat) || empty($pesan) || $selectedvehicle == 'selectvehicle') {
    // Menampilkan pesan pop-up menggunakan JavaScript
    echo '<script>alert("Harap lengkapi semua field pada form!"); window.location.href = "index2.php";</script>';
    exit();
}

$query = "INSERT INTO `userinfodata` (`user`, `alamat`, `pesan`, `kendaraan`) VALUES ('$user', '$alamat', '$pesan', '$selectedvehicle')";

mysqli_query($connection, $query);

// Menampilkan pesan pop-up menggunakan JavaScript
echo '<script>alert("Data telah terkirim!"); window.location.href = "index2.php";</script>';
?>