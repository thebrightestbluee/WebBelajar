<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link href="tools/images/favicon.ico" rel="icon">
    <link rel="shortcut icon" href="tools/favicon.ico">

    <link rel="stylesheet" href="tools/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="tools/css/animate.css">

    <link rel="stylesheet" href="tools/css/owl.carousel.min.css">
    <link rel="stylesheet" href="tools/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="tools/css/magnific-popup.css">

    <link rel="stylesheet" href="tools/css/aos.css">

    <link rel="stylesheet" href="tools/css/ionicons.min.css">

    <link rel="stylesheet" href="tools/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="tools/css/nouislider.css">


    <link rel="stylesheet" href="tools/css/flaticon.css">
    <link rel="stylesheet" href="tools/css/icomoon.css">
    <link rel="stylesheet" href="tools/css/style.css">
</head>

<body>

    <div class="main-section">

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{asset('main')}}"><img src="tools/images/favicon (1).ico" height="50px" width="50px">WebBelajar</a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="{{asset('login')}}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-cloud-download mr-2"></i> Login</a></li>
                        <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i class="ion-ios-cloud-download mr-2"></i> Download</a></li>
                        <li class="nav-item"><a href="https://twitter.com/akun_ambiss_" class="nav-link icon d-flex align-items-center"><i class="ion-logo-twitter"></i></a></li>
                        <li class="nav-item"><a href="https://instagram.com/rd06__" class="nav-link icon d-flex align-items-center"><i class="ion-logo-instagram"></i></a></li>
                        <li class="nav-item"><a href="https://github.com/thebrightestbluee" class="nav-link icon d-flex align-items-center"><i class="ion-logo-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="hero-wrap js-fullheight">
            <div class="container">
                <div class="row description js-fullheight align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="text">
                            <h2>@yield('judul_halaman')</h2>
                            <h1>@yield('konten')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @yield('konten2')









        <footer class="ftco-section ftco-section-2">
            <div class="col-md-12 text-center">
                <p class="mb-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </footer>

    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="tools/js/jquery.min.js"></script>
    <script src="tools/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="tools/js/popper.min.js"></script>
    <script src="tools/js/bootstrap.min.js"></script>
    <script src="tools/js/jquery.easing.1.3.js"></script>
    <script src="tools/js/jquery.waypoints.min.js"></script>
    <script src="tools/js/jquery.stellar.min.js"></script>
    <script src="tools/js/owl.carousel.min.js"></script>
    <script src="tools/js/jquery.magnific-popup.min.js"></script>
    <script src="tools/js/aos.js"></script>

    <script src="tools/js/nouislider.min.js"></script>
    <script src="tools/js/moment-with-locales.min.js"></script>
    <script src="tools/js/bootstrap-datetimepicker.min.js"></script>
    <script src="tools/js/main.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</body>

</html>