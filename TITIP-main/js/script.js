// =================================================================
// KODE FINAL & STABIL - DIJAMIN BERFUNGSI
// =ga================================================================

document.addEventListener("DOMContentLoaded", () => {
  // --- FUNGSI DASAR NAVBAR ---
  const loginButton = document.getElementById("login");
  const loginOptions = document.getElementById("login-options");
  const navbarNav = document.querySelector(".navbar-nav");
  const hamburger = document.querySelector("#hamburger-menu");

  if (loginButton) {
    loginButton.addEventListener("click", (e) => {
      e.preventDefault();
      loginOptions.style.display = loginOptions.style.display === "block" ? "none" : "block";
    });
  }

  if (hamburger) {
    hamburger.addEventListener("click", (e) => {
      e.preventDefault();
      navbarNav.classList.toggle("active");
    });
  }

  document.addEventListener("click", (e) => {
    if (loginButton && !loginButton.contains(e.target) && !loginOptions.contains(e.target)) {
      loginOptions.style.display = "none";
    }
    if (hamburger && !hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
      navbarNav.classList.remove("active");
    }
  });

  // --- LOGIKA UTAMA FORM & PETA ---
  const formPopup = document.getElementById("form-pemesanan");
  if (!formPopup) return; // Hentikan jika form tidak ada

  const btnPesanList = document.querySelectorAll(".btn-pesan");
  const btnClose = formPopup.querySelector(".btn-close");
  const btnSetLocation = document.getElementById("btn-set-location");
  const mapContainer = document.getElementById("mapid-container");
  const orderDetails = document.getElementById("order-details");
  const calculationResult = document.getElementById("calculation-result");
  const locationInfoPenerima = document.getElementById("location-info-penerima");
  const locationInfoToko = document.getElementById("location-info-toko");

  let map = null;
  let control = null;
  let geocoder = L.Control.Geocoder.nominatim();
  let waypoints = [];
  let markers