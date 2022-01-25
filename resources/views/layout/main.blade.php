@php

$act_home = '';
$act_about = '';
$act_services = '';
$act_real = '';
$act_team = '';
$act_blog = '';
$act_contacts = '';

if ($page == 'home') {
    $act_home = 'active';
} elseif ($page == 'about') {
    $act_about = 'active';
} elseif ($page == 'services') {
    $act_services = 'active';
} elseif ($page == 'real') {
    $act_real = 'active';
} elseif ($page == 'team') {
    $act_team = 'active';
} elseif ($page == 'blog') {
    $act_blog = 'active';
} elseif ($page == 'contact') {
    $act_contacts = 'active';
}

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Manaj Corporation</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <style>
        label {
            font-size: .8rem;
        }

    </style>

    <!-- =======================================================
  * Template Name: Moderna - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top {{ $page == 'home' ? 'header-transparent' : $page }}">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="/" style="display: flex; align-items: center; justify-content: center;">
                        <img style="margin-right: 10px;" src="assets/img/logo.png" alt="manajcorporation">
                        <span>Manaj</span></a>
                </h1>
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="{{ $act_home }}"><a href="/">Accueil</a></li>
                    <li class="{{ $act_about }}"><a href="/apropos">Apropos</a></li>
                    <li class="{{ $act_services }}"><a href="/services">Services</a></li>
                    <li class="{{ $act_real }}"><a href="/realisations">Réalisations</a></li>
                    <li class="{{ $act_team }}"><a href="{{ route('team') }}">Equipe</a></li>
                    <!--<li class="{{ $act_blog }}"><a href="/blog">Blog</a></!--li>-->
                    <li class="{{ $act_contacts }}"><a href="/contact">Contacts</a></li>
                    <li class="drop-down"><a href=""><img style="width: 20px;" src="assets/img/france.png"> FR</a>
                        <!--<ul>
              <li><a href="#"><img style="width: 20px;" src="https://www.countryflags.io/us/flat/64.png"> ENG</a></li>
            </ul>-->
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>LIens utils</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Apropos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Equipe</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Réalisations</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Bâtiment & Génie Civil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Electricité Industrielle & Système
                                    Solaire</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Froid & Climatisation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Automatisme & Domotique</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Architecture Intérieur</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Nous contacter</h4>
                        <p>
                            4661, Av Du commerce <br>
                            Kinshasa / Gombe<br>
                            République Démocratique du Congo <br><br>
                            <strong>Téléphone :</strong> +243 970 510 561<br>
                            <strong>Email :</strong> manajcorporation@gmail.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Apropos de Manaj Corporation</h3>
                        <p>MANAJ Corporation est une entreprise générale & une agence de
                            coopération, d’études, de mise en œuvre et des recherches des marchés dans
                            plusieurs secteurs.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Manaj Corporation 2022</span></strong>. Tout droit réservé
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
