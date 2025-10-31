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

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <div class="text-content">
          <h1>SEMUA TENANG, SEMUA SENANG</h1>
          <h2>#SEMUABISADITITIP</h2>
          <p>
            Kami ada untuk semua kebahagiaan. Kami hadir untuk segala kemudahan.
            Kemudahan pesan makanan, belanja di pasar, mengirim barang, belanja
            obat di apotek dan masih banyak kemudahan lainnya.
          </p>
        </div>
        <div class="image-content">
          <img src="images/Kurir logo.png" alt="Kurir Logo" />
        </div>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- Mitra Start -->
    <section id="mitra-titip" class="mitra-titip">
        <h2>MITRA TITIP</h2>
        <div class="container">
            <div class="product-box" onclick="window.location.href='menu-produk1.php'">
                <img src="images/Cemilanta.png" alt="Cimilanta" />
                <div class="product-info">
                    <h3>Cimilanta</h3>
                    <p>Makanan & Minuman</p>
                    <p>Jam Operasi: 08.00 - 22.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk2.php'">
                <img src="images/Nasgor MasGon.png" alt="Nasi Goreng MasGon" />
                <div class="product-info">
                    <h3>Nasi Goreng MasGon</h3>
                    <p>Makanan</p>
                    <p>Jam Operasi: 08.00 - 02.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk3.php'">
                <img src="images/The Poci.png" alt="TEH POCI ASLI" />
                <div class="product-info">
                    <h3>TEH POCI ASLI</h3>
                    <p>Minuman</p>
                    <p>Jam Operasi: 09.00 - 20.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk4.php'">
                <img src="images/Hirey.png" alt="Hiray" />
                <div class="product-info">
                    <h3>Hiray</h3>
                    <p>Makanan & Minuman</p>
                    <p>Jam Operasi: 11.00 - 22.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk5.php'">
                <img src="images/Kimia Farma.png" alt="Kimia Farma" />
                <div class="product-info">
                    <h3>Kimia Farma</h3>
                    <p>Obat</p>
                    <p>Jam Operasi: 08.00 - 23.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk6.php'">
                <img src="images/Toko Kopi M.png" alt="Toko Kopi M" />
                <div class="product-info">
                    <h3>Toko Kopi M</h3>
                    <p>Minuman</p>
                    <p>Jam Operasi: 07.30 - 23.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk7.php'">
                <img src="images/Martabak MasPung.png" alt="Martabak Mas Ipung" />
                <div class="product-info">
                    <h3>Martabak Mas Ipung</h3>
                    <p>Makanan</p>
                    <p>Jam Operasi: 18.00 - 23.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk1.php'">
                <img src="images/Cake.png" alt="Bebs Cake" />
                <div class="product-info">
                    <h3>Bebs Cake</h3>
                    <p>Makanan</p>
                    <p>Jam Operasi: 08.00 - 18.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>

            <div class="product-box" onclick="window.location.href='menu-produk1.php'">
                <img src="images/Chicken.png" alt="Golqi Chicken" />
                <div class="product-info">
                    <h3>Golqi Chicken</h3>
                    <p>Makanan & Minuman</p>
                    <p>Jam Operasi: 08.00 - 23.00</p>
                    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
                </div>
            </div>
    </section>
    <!--Mitra End-->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2>SEKILAS TITIP</h2>
      <h3 class="hashtag">#SemuaBisaDiTITIP</h3>
      <br />
      <br />
      <br />
      <p>
        TITIP merupakan layanan pengantaran darat yang beroperasi di wilayah
        Kota Parepare dan sekitarnya. Dengan berbekal layanan berbasis aplikasi
        perpesanan Whatsapp yang cepat, sederhana dan aman, TITIP berkomitmen
        memberikan akses layanan yang lebih dekat dengan kehidupan masyarakat.
      </p>
      <br />
      <p>
        Beberapa point tersebut diantaranya, kemudahan komunikasi dan transaksi,
        hospitality, konsisten brand, hingga menyangkut masalah kesejahteraan
        mitra pengemudi
      </p>
    </section>
    <!-- About Section End -->

<!-- Kontak Section Start -->
<section id="contact" class="contact">
      <h2>KONTAK TITIP</h2>
      <div class="row">
        <div class="info">
          <p>
            TITIP Indonesia adalah layanan kurir baru dan andal di Parepare.
            Kami menawarkan solusi pengiriman untuk individu dan bisnis di dalam
            kota.
          </p>

          <div class="contact-details">
            <p>
              <i data-feather="map-pin"></i>Bukit Ambassador C17 Kota Parepare,
              Sulawesi Selatan, Indonesia
            </p>
            <p><i data-feather="phone"></i>0851 7990 2326</p>
            <p><i data-feather="mail"></i>officialtitip@gmail.com</p>
          </div>
        </div>

        <!-- Peta -->
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3031.7130967431226!2d119.63935017352472!3d-4.000860644615813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bafc4a389f07%3A0x5727e84f2eac3ff9!2sBukit%20Ambassador!5e1!3m2!1sen!2sid!4v1735952339916!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="maps"
        ></iframe>
      </div>
    </section>
    <footer>Copyright © 2024 TITIP Indonesia</footer>
    <!-- Contact Section End -->

    

 
    <!-- Feather Icons-->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
