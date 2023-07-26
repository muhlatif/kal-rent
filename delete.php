<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'db_jasa');

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil ID dari parameter URL
$id = $_GET['id'];

// Menghapus data dari database
$query = "DELETE FROM userinfodata WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    // Data berhasil dihapus, tampilkan popup
    echo "<script>";
    echo "alert('Data berhasil dihapus.');";
    echo "window.location.href = 'admin2.php';";
    echo "</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Menutup koneksi database
mysqli_close($conn);
?>