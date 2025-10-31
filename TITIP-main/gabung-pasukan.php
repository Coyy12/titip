<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kurir TITIP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style-->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar Logo Start -->
    <div class="white-navbar">
      <div class="logo-container">
        <img src="images/LOGO TITIP.png" alt="Logo TITIP" class="logo" />
      </div>
    </div>
    <!-- Navbar Logo End -->

    <!-- Navbar Menu Start -->
    <div class="red-navbar">
      <nav class="navbar">
        <div class="navbar-nav">
          <a href="index.php#home">Home</a>
          <a href="index.php#layanan">Layanan</a>
          <a href="index.php#about">Tentang Kami</a>
            <a href="index.php#gabung-mitra" >Gabung Mitra </a>
          <a href="index.php#contact">Kontak</a>
        </div>
        
        <div class="navbar-extra">
    <a href="#" id="login"><i data-feather="users"></i></a>
    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    <div class="dropdown" id="login-options">
        <a href="login-admin.php">Login Admin</a>
        <a href="login-mitra.php">Login Mitra</a>
    </div>
</div>
      </nav>
    </div>

    <!-- Navbar Menu End -->

    <!-- Content -->
    <form action="submit-pasukan.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <h1>DAFTAR PASUKAN TITIP</h1>

        <!-- Data Pribadi -->
        <h2>Data pribadi</h2>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required />
        </div>
        <div class="form-group">
            <label>Tempat/Tgl lahir:</label>
            <input type="text" name="tempat" placeholder="Masukkan tempat lahir" required />
            <input type="date" name="tanggal_lahir" required />
        </div>
        <div class="form-group">
            <label>Jenis kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="alamat" required />
        </div>
        <div class="form-group">
            <label>No Telepon/Whatsapp:</label>
            <input type="number" name="telepon" required />
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required />
        </div>

        
        <div class="form-group">
            <label>Upload File Sim C</label>
            <input type="file" name="sim_c" required />
        </div>
        <div class="form-group">
            <label>Foto Driver</label>
            <input type="file" name="foto_diri" required />
        </div>

        <!-- Informasi Kendaraan -->
        <h2>Informasi kendaraan</h2>
        <div class="form-group">
            <label>Merk kendaraan:</label>
            <input type="text" name="merk_kendaraan" required />
        </div>
        <div class="form-group">
            <label>Nomor plat kendaraan:</label>
            <input type="text" name="plat_kendaraan" required />
        </div>
        <div class="form-group">
            <label>Foto kendaraan</label>
            <input type="file" name="foto_kendaraan" required />
        </div>
        <div class="form-group">
            <label>Foto STNK</label>
            <input type="file" name="foto_stnk" required />
        </div>

        <button type="submit" class="btn btn-selesai">Kirim</button>
    </div>
</form>

    <script>
      //script pasukan TITIP
      // Fungsi untuk menangani tombol "Simpan"
      function handleSave(button) {
        button.classList.add("saving"); // Ubah warna tombol menjadi merah
        button.textContent = "Menyimpan..."; // Ubah teks tombol

        // Simulasikan proses penyimpanan
        setTimeout(() => {
          button.classList.remove("saving"); // Kembalikan warna tombol
          button.textContent = "Simpan"; // Kembalikan teks tombol
          alert("Data berhasil disimpan!");
        }, 2000); // Simulasi waktu penyimpanan 2 detik
      }

      // Fungsi untuk menangani tombol "Batal"
      function handleCancel(button) {
        const confirmation = confirm(
          "Apakah Anda yakin ingin membatalkan penyimpanan?"
        );
        if (confirmation) {
          alert("Penyimpanan dibatalkan.");
        }
      }
    </script>
    <script>
        // Menangkap parameter status di URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        
        // Jika status adalah 'success', tampilkan alert
        if (status === 'success') {
            alert("Data berhasil disimpan!");
        } else if (status === 'error_kendaraan') {
            alert("Error: Data kendaraan gagal disimpan.");
        } else if (status === 'error_registrasi') {
            alert("Error: Data registrasi gagal disimpan.");
        }
    </script>

    <!-- Feather Icons-->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
