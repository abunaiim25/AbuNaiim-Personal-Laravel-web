{{--control+H -> replace--}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Abu Naiim</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('front')}}/img/favicon-profile.png" rel="icon">
  <link href="{{ asset('front')}}/img/favicon-profile.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('front')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('front')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('front')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('front')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('front')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  

  {{--font awesome--}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


  <!-- Template Main CSS File -->
  <link href="{{ asset('front')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
 @include('layouts.inc_front.sidebar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('layouts.inc_front.hero')
  <!-- End Hero -->


  <main id="main">

    <!-- ======= About Section ======= -->
    @include('layouts.inc_front.about')
   <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    @include('layouts.inc_front.skills')
   <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    @include('layouts.inc_front.resume')
    <!-- End Resume Section -->

{{--
    <!-- ======= Portfolio Section ======= -->
    @include('layouts.inc_front.portfolio')
    <!-- End Portfolio Section -->
--}}

    <!-- ======= Services Section ======= -->
    @include('layouts.inc_front.services')
   <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    @include('layouts.inc_front.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.inc_front.footer')
 <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front')}}/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('front')}}/vendor/aos/aos.js"></script>
  <script src="{{ asset('front')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('front')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('front')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('front')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('front')}}/vendor/typed.js/typed.min.js"></script>
  <script src="{{ asset('front')}}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('front')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front')}}/js/main.js"></script>

</body>

</html>