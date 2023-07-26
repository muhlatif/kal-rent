<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'db_jasa');

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari form
$user = $_POST['user'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];
$kendaraan = $_POST['kendaraan'];

// Menyimpan data ke database
$query = "INSERT INTO userinfodata (user, alamat, pesan, kendaraan) VALUES ('$user', '$alamat', '$pesan','$kendaraan')";
if (mysqli_query($conn, $query)) {
    echo "Data berhasil disimpan.";
    header("Location: admin2.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Menutup koneksi database
mysqli_close($conn);
?>
