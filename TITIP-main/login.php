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
          <a href="index.php">Home</a>
          <a href="index.php#layanan">Layanan</a>
          <a href="index.php#about">Tentang Kami</a>

          <!-- Gabung Mitra Dropdown -->

          <div class="dropdown">
            <a href="index.php#gabung-mitra" class="gabung-mitra-link"
              >Gabung Mitra <i data-feather="chevron-down"></i
            ></a>
            <div class="dropdown-menu">
              <a href="gabung-pasukan.php">Gabung Pasukan TITIP</a>
              <a href="gabung-umkm.php">Gabung Mitra UMKM</a>
            </div>
          </div>

          <a href="index.php#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
          <a href="login.php" id="login"><i data-feather="users"></i></a>
          <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
      </nav>
    </div>

    <!-- Navbar Menu End -->

    <!--Login-->
    <div class="login">
  <div class="container">
    <h1>Login</h1>
    <form id="login-form" action="koneksi-login.php" method="POST">
      <div class="form-group">
        <label for="user-id">User ID:</label>
        <input type="text" id="user-id" name="user_id" required />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</div>

    

    <!-- Feather Icons-->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
