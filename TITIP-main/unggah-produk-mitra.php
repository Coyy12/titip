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
          <a href="#home">Home</a>
          <a href="mitra-titip.php">Mitra </a>
          <a href="#about">Tentang Kami</a>
          <a href="#contact">Kontak</a>
        </div>
        <div class="navbar-extra">
    <a href="#" id="login"><i data-feather="user"></i></a>
    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    <div class="dropdown" id="login-options">
    <a href="laman-profil-mitra.php">Profil Mitra</a>
    <a href="unggah-produk-mitra.php">Unggah Produk</a>
    <a href="log-out.php">Sign Out</a>
    </div>
</div>
      </nav>
    </div>

    <!-- Navbar Menu End -->

    <!-- Menu Profil Mitra -->
    <main class="profil-mitra">
    <section class="profile-info">
      <h1>Profil Mitra</h1>
      <p>Selamat datang, [Nama Mitra]!</p>
    </section>

    <section class="upload-product">
      <h2>Unggah Produk Baru</h2>
      <form id="uploadForm" enctype="multipart/form-data">
        <div class="form-group">
          <label for="productImage">Foto Produk:</label>
          <input type="file" id="productImage" name="productImage" accept="image/*" required />
        </div>
        <div class="form-group">
          <label for="productName">Nama Produk:</label>
          <input type="text" id="productName" name="productName" placeholder="Masukkan nama produk" required />
        </div>
        <div class="form-group">
          <label for="productName">Harga Produk:</label>
          <input type="text" id="productName" name="productName" placeholder="Masukkan harga produk" required />
        </div>
        <div class="form-group">
          <label for="productDescription">Deskripsi Produk:</label>
          <textarea id="productDescription" name="productDescription" rows="4" placeholder="Masukkan deskripsi produk"></textarea>
        </div>
        <button type="submit">Unggah</button>
      </form>
    </section>

    <section class="product-list">
      <h2>Produk Anda</h2>
      <div id="productGallery">
        <!-- Produk akan ditampilkan di sini -->
      </div>
    </section>
  </main>
</body>
</html>