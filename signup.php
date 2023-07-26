<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'db_login');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        // Ambil nilai maksimal ID User dari tabel
        $sql = "SELECT MAX(id_user) as max_id FROM login";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $next_id = $row['max_id'] + 1;

        // Cek apakah email sudah terdaftar sebelumnya
        $stmt = $conn->prepare("SELECT * FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            echo "<h2>Email already registered</h2>";
        } else {
            // Jika email belum terdaftar, lakukan operasi INSERT
            $stmt = $conn->prepare("INSERT INTO login (id_user, nama, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $next_id, $nama, $email, $password);
            $stmt->execute();

            // Tampilkan notifikasi menggunakan JavaScript
            echo "<script>alert('Akun telah terdaftar. Selamat bergabung, " . $nama . "!');</script>";

            // Redirect to login.php after successful registration
            header("Location: login.php");
            exit(); // Make sure to exit after redirect
        }
    }
}
?>
