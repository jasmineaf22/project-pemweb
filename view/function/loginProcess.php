<?php
session_start();

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query untuk mendapatkan data user dari database
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User ditemukan, verifikasi password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Validasi berhasil, mulai sesi
            $_SESSION['user'] = $row;

            // Redirect ke halaman dashboard
            header("Location: ../dashboard.php");
            exit;
        } else {
            // Password tidak cocok
            echo "Password salah. Silakan coba lagi.";
        }
    } else {
        // User tidak ditemukan
        echo "User dengan email '$email' tidak ditemukan.";
    }
}

$conn->close();
?>