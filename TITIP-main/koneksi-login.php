<?php
$servername = "localhost"; // Ganti sesuai dengan server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "admintitip";

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$user_id = $_POST['user_id'];
$password_input = $_POST['password'];

// Menghindari SQL Injection
$user_id = $conn->real_escape_string($user_id);
$password_input = $conn->real_escape_string($password_input);

// SQL untuk mengambil data login
$sql = "SELECT * FROM login WHERE idadmin='$user_id' AND password='$password_input'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Data ditemukan, login berhasil
    session_start();
    $_SESSION['user_id'] = $user_id; // Simpan User ID ke session
    header("Location: laman-mitra.php"); // Arahkan ke halaman dashboard
    exit();
} else {
    // Data tidak ditemukan, login gagal
    echo "<script>alert('User ID atau Password salah.'); window.location.href='login.php';</script>";
}

$conn->close();
?>