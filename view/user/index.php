<?php
require_once "../../session/index.php";

// id user
$userID = $_SESSION["id"];



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simegi</title>
  <meta content name="description">
  <meta content name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="../../index.html" class="logo me-auto"><img src="../../assets/img/logo.png" alt class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="getstarted scrollto" href="../../index.html">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Metrologi Legal Kabupaten Banyumas</h1>
          <h2>Permasalahan mengenai segala sesuatu dalam ukur-mengukur,
            takar-menakar dan timbang-menimbang secara luas yang lazim disebut
            permasalahan "metrologi" mencakup semua teori maupun praktek yang
            berhubungan dengan pengukuran yaitu macamnya, sifatnya,
            kesaksamaan dan kebenarannya.</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="../../assets/img/heroo.png" class="img-fluid animated" alt>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="tentang" class="about">
      <div class="container" data-aos="fade-up">


        <div class="section-title mt-3">
          <div class="section-title">
            <h2>Tera/Tera Ulang</h2>
            <p>Tera adalah tanda uji pada alat ukur, sementara tera ulang adalah
              pengujian kembali secara berkala terhadap Alat Ukur, Takar,
              Timbang dan Perlengkapannya (UTTP) dan yang dipakai dalam
              perdagangan. Tujuan utama adalah untuk melindungi pembeli dan
              pedagang.</p>
          </div>

    </section><!-- End About Us Section -->
    <section id="layanan" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="section-title">
            <h2>Daftar</h2>
            <center>
              <h3>Daftar Pemilik dan Alat UTTP</h3>
            </center>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Daftar Pemilik </h5>
                    <p class="card-text">Daftarkan identitas kepemilikan alat UTTP</p>
                    <a href="reg-pemilik.php" class="btn btn-primary">Daftarkan</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Daftar Alat UTTP</h5>
                    <p class="card-text">Daftarkan identitas alat UTTP</p>
                    <a href="reg-uttp.php" class="btn btn-primary">Daftarkan</a>
                  </div>
                </div>
              </div>
            </div>

    </section><!-- End Services Section -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-6 col-md-6 footer-contact">
              <h3>Simegi</h3>
              <p>
                Jl. DI Panjaitan No.222 <br>
                Karangreja, Purwokerto Kidul, Kec. Purwokerto Selatan<br>
                Kabupaten Banyumas, Jawa Tengah 53147 <br><br>
                <strong>Phone:</strong> (0281) 636846<br>
                <strong>Email:</strong> metrologipwt@gmail.com<br>
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#tentang">Tera/Tera Ulang</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#tentang">Daftar</a></li>

              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Cras fermentum odio eu feugiat lide par naso tierra videa
                magna derita valies</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; 2023 <strong><span>-</span></strong> Dinas Perindustrian Dan
          Perdagangan Banyumas
        </div>
        <!-- <div class="credits">
        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/aos/aos.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>

</body>

</html>