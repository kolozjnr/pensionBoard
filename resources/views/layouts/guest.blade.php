<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files --> 
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <style>
        .nav-bg{
            background-color: #1b2f45;
        }
    </style>
    </head>
    <body class="page-index">

        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex nav-bg align-items-center sticky-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        
            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="d-flex align-items-center">Niger State Pension Board</h1>
            </a>
        
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        
            <nav id="navbar" class="navbar">
                <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/">FAQ</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
                </ul>
            </nav><!-- .navbar -->
        
            </div>
        </header><!-- End Header -->
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                    <span>Niger State Pension</span>
                    </a>
                    <p>The contributory Pension Scheme Requires pension funds to be privately managed exclusively by licensed pension Fund Administration (PFA)</p>
                    <div class="social-links d-flex  mt-3">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                    <li><i class="bi bi-dash"></i> <a href="/">Home</a></li>
                    <li><i class="bi bi-dash"></i> <a href="/about">About us</a></li>
                    <li><i class="bi bi-dash"></i> <a href="/faq">FAQ</a></li>
                    <li><i class="bi bi-dash"></i> <a href="/contact">Contact</a></li>
                    <li><i class="bi bi-dash"></i> <a href="/privacy">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-5 footer-links">
                    <h4>News</h4>
                    <ul>
                    <li><i class="bi bi-dash"></i> <a href="/">Pension News</a></li>
                    <li><i class="bi bi-dash"></i> <a href="/">Pension Tips</a></li>
                    <li><i class="bi bi-dash"></i> <a href="/">Pension Laws</a></li>
                    <li><i class="bi bi-dash"></i> <a href="/">Pension Operators</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                    A108 Adam Street <br>
                    Minna, Niger State<br>
                    Nigeria <br><br>
                    <strong>Phone:</strong> +2347067317819<br>
                    <strong>Email:</strong> info@pension.com<br>
                    </p>

                </div>

                </div>
            </div>
            </div>

            <div class="footer-legal">
            <div class="container">
                <div class="copyright">
                &copy; Copyright <strong><span>Niger State Pension Board</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
                </div>
            </div>
            </div>
        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
