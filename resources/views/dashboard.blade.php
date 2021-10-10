<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Servion | Landing, Responsive &amp; Business Templatee</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/') }}/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/') }}/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/') }}/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/') }}/favicons/favicon.ico">
    <link rel="manifest" href="{{ asset('img/') }}/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{ asset('img/') }}/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('css/') }}/theme.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"><img
                        src="{{ asset('img/') }}/gallery/logo.png" height="24" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active"
                                aria-current="page" href="#home">Home</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#team">Team</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#pricingTable">Pricing table</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                                href="#help">Help</a></li>
                    </ul>
                    @auth
                        <form class="ps-lg-5"><a class="btn btn-light order-1 order-lg-0"
                                href="{{ route('logout') }}">logout
                            </a></form>
                    @else
                        <form class="ps-lg-5"><a class="btn btn-light order-1 order-lg-0"
                                href="{{ route('login') }}">login
                            </a></form>
                    @endauth
                </div>
            </div>
        </nav>
        <section id="home">
            <div class="bg-holder" style="background:#424D83;background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center">
                    <h1 class="text-center text-light">Statistik</h1>
                </div>
                <div class="row align-items-center min-vh-50 min-vh-sm-75">
                    @livewire('shortlink.create')
                </div>
            </div>
        </section>
        
        <section id="home">
            <div class="bg-holder"
                style="background:url('http://localhost:8000/img/gallery/hero.png');background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="row align-items-center">
                </div>
            </div>
        </section>

        <section class="py-0 py-xxl-6" id="help">
            <div class="bg-holder"
                style="background-image:url('http://localhost:8000/img/gallery/footer-bg.png');background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row min-vh-75 min-vh-xl-50 pt-10">
                    <div class="col-6 col-md-4 col-xl-3 mb-3">
                        <h5 class="lh-lg fw-bold text-white">HOSTING</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Shared
                                    Hosting</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">VPS
                                    Hosting</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cloud
                                    Hosting</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Wordpress
                                    Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3 mb-3">
                        <h5 class="lh-lg fw-bold text-white">FEATURES</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Beginner
                                    Guide</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Move to
                                    Servion</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Website
                                    Builder</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Tools and
                                    Resources</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3 mb-3">
                        <h5 class="lh-lg fw-bold text-white">SUPPORT</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Help
                                    Center</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Submit a
                                    Ticket</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Contact Us</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 mb-3">
                        <h5 class="lh-lg fw-bold text-white">WE ACCEPT</h5>
                        <ul class="list-unstyled list-inline mb-6 mb-md-0">
                            <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img
                                        class="list-social-icon" src="{{ asset('img/') }}/gallery/visa.png"
                                        width="50" alt="..." /></a></li>
                            <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img
                                        class="list-social-icon" src="{{ asset('img/') }}/gallery/master-card.png"
                                        width="50" alt="..." /></a></li>
                            <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img
                                        class="list-social-icon" src="{{ asset('img/') }}/gallery/union-pay.png"
                                        width="50" alt="..." /></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img
                                        class="list-social-icon" src="{{ asset('img/') }}/gallery/express.png"
                                        width="50" alt="..." /></a></li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row flex-center pb-3">
                    <div class="col-md-6 order-0">
                        <p class="text-200 text-center text-md-start">All rights Reserved &copy; Your Company, 2021</p>
                    </div>
                    <div class="col-md-6 order-1">
                        <p class="text-200 text-center text-md-end"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                fill="#A8B7FF" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="text-200 fw-bold" href="https://themewagon.com/"
                                target="_blank">ThemeWagon </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- <section> close ============================-->
    <!-- ============================================-->





    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/') }}/popper.min.js"></script>
    <script src="{{ asset('js/') }}/bootstrap.min.js"></script>
    <script src="{{ asset('js/') }}/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('js/') }}/all.min.js"></script>
    <script src="{{ asset('js/') }}/theme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap"
        rel="stylesheet">
    @livewireScripts
    <script>
        function copyFunction() {
            /* Get the text field */
            var copyText = document.getElementById("copy-input");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);
        }
    </script>

</body>

</html>
