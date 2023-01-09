<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style_akun.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <h1 class="text-light"><a href="akun.html"><?= session()->get('name'); ?></a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#about" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Informasi Akun</span></a></li>
          <li><a href="home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Halaman Utama</span></a></li>
          <li><a href="home#menu" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Jenis Layanan</span></a></li>
          <li><a href="home#contact" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Kontak kami</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

            <h3>Akun Anda</h3>
            <p class="fst-italic">
              Berikut Informasi mengenai akun anda
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Username:</strong> <span><?= session()->get('name'); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>No Hp:</strong> <span><?= session()->get('no_hp'); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= session()->get('email'); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= session()->get('alamat'); ?></span></li>
                </ul>
              </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>