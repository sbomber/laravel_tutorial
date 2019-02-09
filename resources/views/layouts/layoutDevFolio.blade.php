<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-`scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../../../css/DevFolio/img/favicon.png" rel="icon">
    <link href="../../../css/DevFolio/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="../../../css/DevFolio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../../../css/DevFolio/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../css/DevFolio/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../css/DevFolio/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../../css/DevFolio/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../css/DevFolio/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../../../css/DevFolio/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="/">9K Tech, LLC</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault"
                aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link js-scroll" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll" href="projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll" href="projects/create">Create</a>
                            </li>

                    @else
                        {{-- <li class="nav-item">
                            <a class="nav-link js-scroll" href="{{ url('/home') }}">Home</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link js-scroll"href="{{ route('login') }}">Login</a>
                        </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link js-scroll" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->

    @yield( 'intro')

    <section id="projects" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            @yield('content')
        </div>
    </div> --}}

    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright-box">
                            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                            <div class="credits">
                                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--/ Section Contact-footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="../../../css/DevFolio/lib/jquery/jquery.min.js"></script>
    <script src="../../../css/DevFolio/lib/jquery/jquery-migrate.min.js"></script>
    <script src="../../../css/DevFolio/lib/popper/popper.min.js"></script>
    <script src="../../../css/DevFolio/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../css/DevFolio/lib/easing/easing.min.js"></script>
    <script src="../../../css/DevFolio/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="../../../css/DevFolio/lib/counterup/jquery.counterup.js"></script>
    <script src="../../../css/DevFolio/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../css/DevFolio/lib/lightbox/js/lightbox.min.js"></script>
    <script src="../../../css/DevFolio/lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="../../../css/DevFolio/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="../../../css/DevFolio/js/main.js"></script>

</body>

</html>
