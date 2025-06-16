<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Manufix.id</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon-white.png" rel="icon">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

  <!-- Vite Styles -->
  @vite('resources/css/app.css')

  <!-- =======================================================
  * Template Name: KnightOne
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Updated: Oct 16 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  @include('header')

  <main class="main">


    <!-- Hero Section -->
    @include('hero')
    <!-- /Hero Section -->

    <!-- About Section -->
    {{-- @include('about') --}}
    <!-- /About Section -->

    <!-- Services Section -->
    @include('service')
    <!-- /Services Section -->

    <!-- Call To Action Section -->
    @include('cta')
    <!-- /Call To Action Section -->

    <!-- Features Section -->
    {{-- @include('feature') --}}
    <!-- /Features Section -->

    <!-- Clients Section -->
    @include('client')
    <!-- /Clients Section -->

    <!-- Stats Section -->
    @include('statistic')
    <!-- /Stats Section -->

    <!-- Portfolio Section -->
    {{-- @include('portofolio') --}}
    <!-- /Portfolio Section -->

    <!-- Pricing Section -->
    @include('pricing')
    <!-- /Pricing Section -->

    <!-- Faq Section -->
    {{-- @include('faq') --}}
    <!-- /Faq Section -->

    <!-- Recent Posts Section -->
    {{-- @include('recent_post') --}}
    <!-- /Recent Posts Section -->

    <!-- Contact Section -->
    @include('contact')
    <!-- /Contact Section -->

  </main>

  @include('footer')

  <!-- Scroll Top -->
  <a href="#" id="whatssapp" class="whatssapp d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
  <a href="https://wa.me/6285117511135" target="_blank" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  @vite('resources/js/app.js')


</body>

</html>