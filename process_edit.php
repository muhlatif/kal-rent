<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'db_jasa');

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

    // Proses pembaruan data jika form disubmit
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_GET['id'];
        $user = $_POST['user'];
        $alamat = $_POST['alamat'];
        $pesan = $_POST['pesan'];
        $kendaraan = $_POST['kendaraan'];

        // Mengupdate data di database
        $query = "UPDATE userinfodata SET user = '$user', alamat='$alamat', pesan='$pesan', kendaraan='$kendaraan' WHERE id='$id'";
        if (mysqli_query($conn, $query)) {
            echo "Data berhasil diupdate.";
            echo "<script>window.location.href = 'admin2.php';</script>";
            mysqli_close($conn);
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
// Menutup koneksi database
mysqli_close($conn);
?>
