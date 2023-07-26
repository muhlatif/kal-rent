<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'db_login');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT * FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] === $password) {
                // Check if email is admin email
                if ($email === 'admin@gmail.com') {
                    // Login successful for admin, redirect to indexadmin.php
                    header("Location: indexadmin.php");
                } else {
                    // Login successful for normal user, redirect to index2.php
                    header("Location: index2.php");
                }
                exit(); // Make sure to exit after redirect
            } else {
                echo '<script>alert("Invalid Email or Password"); window.location.href = "login.php";</script>';
            }
        } else {
            echo '<script>alert("Invalid Email or Password"); window.location.href = "login.php";</script>';
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAL Rent</title>
    <link rel="stylesheet" href="css/style_login.css"/>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <header class="main">
        <nav>
            <a href="index.php" class="logo">
                <img src="images/logo4.png"/>
            </a>

            <ul class="menu">
                <li><a href="index.php">Beranda</a></a></li>
                <li><a href="index.php#features">Fitur</a></li>
                <li><a href="index.php#about">Tentang</a></li>
                <li><a href="index.php#contact">Kontak</a></li>
                <a button class="button" id="form-open">Login</a>
            </ul>            
        </nav>
    </header>

            <!-- Home -->
            <section class="home">
            <div class="form_container">
                <i class="uil uil-times form_close"></i>
               <!-- Login Form -->
                <div class="form login_form">
                    <form action="login.php" method="post">
                        <h2>Login</h2>
                        <div class="input_box">
                            <input type="email" name="email" placeholder="Enter your email" required />
                            <i class="uil uil-envelope-alt email"></i>
                        </div>
                        <div class="input_box">
                            <input type="password" name="password" placeholder="Enter your password" required />
                            <i class="uil uil-lock password"></i>
                            <i class="uil uil-eye-slash pw_hide"></i>
                        </div>

                        <div class="option_field">
                            <span class="checkbox">
                                <input type="checkbox" id="check" />
                                <label for="check">Remember me</label>
                            </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                         </div>

                        <button type="submit" class="button2">Login Now</button>

                        <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
                    </form>
                </div>


<!-- Signup Form -->
<div class="form signup_form">
    <form action="signup.php" method="post">
        <h2>Signup</h2>
        <div class="input_box">
            <i class="uil-user"></i>
            <input type="text" name="nama" placeholder="Enter your name" required />
        </div>
        <div class="input_box">
            <input type="email" name="email" placeholder="Enter your email" required />
            <i class="uil uil-envelope-alt email"></i>
        </div>
        <div class="input_box">
            <input type="password" name="password" placeholder="Create password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
        </div>

        <button type="submit" class="button2">Signup Now</button>

        <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
    </form>
</div>

            </div>
        </section>
        <script src="script.js"></script>
    </body>
</html>