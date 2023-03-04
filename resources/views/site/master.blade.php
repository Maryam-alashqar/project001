<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') {{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href={{ asset('siteassets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/ticker-style.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/flaticon.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/slicknav.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/animate.min.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/magnific-popup.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/fontawesome-all.min.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/themify-icons.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/slick.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/nice-select.css') }}>
    <link rel="stylesheet" href={{ asset('siteassets/css/style.css') }}>
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src={{ asset('siteassets/img/icon/header_icon1.png') }}>34ºc, Sunny
                                        </li>
                                        <li><img src={{ asset('siteassets/img/icon/header_icon1.png') }}>Tuesday, 18th
                                            June, 2019</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">    
                          
                                            <a class="nav-link" data-toggle="dropdown" href="#">
                                                <img width="25" height="20" style="object-fit: contain; margin-top: -5px;" src=""
                                                    class="img-circle elevation-2 ml-1" alt="">
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu  dropdown-menu-right">
                                                <a href="" class="dropdown-item">
                                                    signed as <br>
                                                </a>
                        
                                                <div class="dropdown-divider"></div>
                                                <a href="{{ }}" class="dropdown-item">
                                                    <i class="fas fa-user mr-2"></i> Profile
                                                </a>
                        
                                            
                        
                                                <div class="dropdown-divider"></div>
                                                <a href="{{ route('logout') }}" onclick="
                                                event.preventDefault();
                                                document.getElementById('logout-form').submit()
                                                " class="dropdown-item">
                                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                                </a>
                        
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    {{-- <button class="dropdown-item">
                                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout</button> --}}
                                                </form>
                        
                                            </div>

                                        </li>
                               
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src={{ asset('siteassets/img/logo/logo.png') }}
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src={{ asset('siteassets/img/hero/header_card.jpg') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="{{ route('site.index')}}"><img src={{ asset('siteassets/img/logo/logo.png') }}></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('site.index')}}">Home</a></li>
                                            <li><a href="{{ route('site.category')}}">Category</a></li>
                                            <li><a href="{{ route('site.about')}}">About</a></li>
                                            <li><a href="latest_news.html">Latest News</a></li>
                                            <li><a href="{{ route('site.contact')}}">Contact</a></li>
                                     
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames
                                            lectus tempor da blandit gravida sodales Suscipit mauris pede for con
                                            sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida
                                            sodales Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src={{ asset('siteassets/img/logo/form-iocn.png') }} ></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template is made with <i class="ti-heart" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src={{ asset('siteassets/js/vendor/modernizr-3.5.0.min.js') }}></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src={{ asset('siteassets/js/vendor/jquery-1.12.4.min.js') }}></script>
    <script src={{ asset('siteassets/js/popper.min.js') }}></script>
    <script src={{ asset('siteassets/js/bootstrap.min.js') }}></script>
    <!-- Jquery Mobile Menu -->
    <script src={{ asset('siteassets/js/jquery.slicknav.min.js') }}></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src={{ asset('siteassets/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('siteassets/js/slick.min.js') }}></script>
    <!-- Date Picker -->
    <script src={{ asset('siteassets/js/gijgo.min.js') }}></script>
    <!-- One Page, Animated-HeadLin -->
    <script src={{ asset('siteassets/js/wow.min.js') }}></script>
    <script src={{ asset('siteassets/js/animated.headline.js') }}></script>
    <script src={{ asset('siteassets/js/jquery.magnific-popup.js') }}></script>

    <!-- Breaking New Pluging -->
    <script src={{ asset('siteassets/js/jquery.ticker.js') }}></script>
    <script src={{ asset('siteassets/js/site.js') }}></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src={{ asset('siteassets/js/jquery.scrollUp.min.js') }}></script>
    <script src={{ asset('siteassets/js/jquery.nice-select.min.js') }}></script>
    <script src={{ asset('siteassets/js/jquery.sticky.js') }}></script>

    <!-- contact js -->
    <script src={{ asset('siteassets/js/contact.js') }}></script>
    <script src={{ asset('siteassets/js/jquery.form.js') }}></script>
    <script src={{ asset('siteassets/js/jquery.validate.min.js') }}></script>
    <script src={{ asset('siteassets/js/mail-script.js') }}></script>
    <script src={{ asset('siteassets/js/jquery.ajaxchimp.min.js') }}></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src={{ asset('siteassets/js/plugins.js') }}></script>
    <script src={{ asset('siteassets/js/main.js') }}></script>

</body>

</html>