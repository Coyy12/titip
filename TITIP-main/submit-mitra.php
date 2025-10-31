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
$nama_usaha = $_POST['nama-usaha'];
$bidang_usaha = $_POST['bidang-usaha'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$sosial_media = $_POST['sosial-media'];
$nama_pemilik = $_POST['nama-pemilik'];
$whatsapp = $_POST['whatsapp'];
$email = $_POST['email'];

// Menyimpan file logo
$logo = $_FILES['logo']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($logo);
move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);

// SQL untuk memasukkan data ke tabel mitra
$sql = "INSERT INTO mitra (pemilik, whatsapp, email, nama, bidang, notelepon, alamat, sosial_media, logo) 
VALUES ('$nama_pemilik', '$whatsapp', '$email', '$nama_usaha', '$bidang_usaha', '$telepon', '$alamat', '$sosial_media', '$logo')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke form dengan pesan sukses
    header("Location: gabung-umkm.php?status=success");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>