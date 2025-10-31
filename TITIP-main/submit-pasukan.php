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

// Fungsi untuk mengenkripsi data
function encryptData($data) {
    $encryption_key = 'your_secret_key'; // Ganti dengan kunci yang aman
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv); // Simpan IV bersama dengan data terenkripsi
}

// Mengambil data dari form
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];

// Menyimpan file SIM C
$sim_c = $_FILES['sim_c']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($sim_c);
move_uploaded_file($_FILES['sim_c']['tmp_name'], $target_file);

// Menyimpan file foto diri
$foto_diri = $_FILES['foto_diri']['name'];
$target_file_foto = $target_dir . basename($foto_diri);
move_uploaded_file($_FILES['foto_diri']['tmp_name'], $target_file_foto);

// Enkripsi data SIM C
$sim_c_content = file_get_contents($target_file);
$encrypted_sim_c = encryptData($sim_c_content);

// SQL untuk memasukkan data ke tabel
$sql = "INSERT INTO registrasi_driver (nama, tgl_lahir, jenis_kelamin, alamat, notelpon, email, simc, foto_diri) 
VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$telepon', '$email', '$encrypted_sim_c', '$foto_diri')";

if ($conn->query($sql) === TRUE) {
    // Ambil ID dari registrasi terakhir yang dimasukkan
    $rd = $conn->insert_id;

    // Mengambil data kendaraan dari form
    $merk_kendaraan = $_POST['merk_kendaraan'];
    $plat_kendaraan = $_POST['plat_kendaraan'];

    // Menyimpan file foto kendaraan
    $foto_kendaraan = $_FILES['foto_kendaraan']['name'];
    $target_file_kendaraan = $target_dir . basename($foto_kendaraan);
    move_uploaded_file($_FILES['foto_kendaraan']['tmp_name'], $target_file_kendaraan);

    // Menyimpan file STNK
    $foto_stnk = $_FILES['foto_stnk']['name'];
    $target_file_stnk = $target_dir . basename($foto_stnk);
    move_uploaded_file($_FILES['foto_stnk']['tmp_name'], $target_file_stnk);

    // Enkripsi data STNK
    $stnk_content = file_get_contents($target_file_stnk);
    $encrypted_stnk = encryptData($stnk_content);

    // SQL untuk memasukkan data ke tabel kendaraan_driver
    $sql_kendaraan = "INSERT INTO kendaraan_driver (rd, merk, plat, foto_kendaraan, stnk) 
    VALUES ('$rd', '$merk_kendaraan', '$plat_kendaraan', '$foto_kendaraan', '$encrypted_stnk')";

    if ($conn->query($sql_kendaraan) === TRUE) {
        header("Location: gabung-pasukan.php?status=success");
        exit();
    } else {
        header("Location: gabung-pasukan.php?status=error_kendaraan");
        exit();
    }

} else {
    header("Location: gabung-pasukan.php?status=error_registrasi");
    exit();
}

$conn->close();
?>