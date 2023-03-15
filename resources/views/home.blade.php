<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Healdi - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>Data Karyawan Solo Technopark</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('homepage/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/style.css')}}" rel="stylesheet">
    <link href="{{ asset('homepage/assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5/html5shiv.min.js"></script>
    <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->


    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url ('/') }}">
                        <img src="homepage/assets/img/Logo-Technopark-Remake-Solo-1.png" width="200" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                       
                        <li>
                            <a href="#about">Tentang</a>
                        </li>
                        <li>
                            <a href="#informasiumum">Informasi Umum</a>
                        </li>
                       
                        <li>
                            <a href="/dashboard">Dashboard</a>
                        </li>
                        <li>
                        @auth
                        <li>
                            <a href="/logout">Logout</a>
                        </li>
                        @endauth
                    </ul>

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area inc-shape content-less">
        <div id="bootcarousel" class="carousel text-light text-large slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(homepage/assets/img/stp1.png);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                           
                                            <h2 data-animation="animated slideInRight">Pusat Edukasi <strong>Solo Technopark</strong></h2>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(homepage/assets/img/stp3.jpeg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Pusat Inovasi dan Vokasi yang Memadukan Unsur Pengembangan Iptek, Kebutuhan Pasar, Industri dan Bisnis Untuk Penguatan Daya Saing Daerah.</h4>
                                            <h2 data-animation="animated slideInRight"><strong>Kawasan Inovatif dan Berdaya Saing International</strong></h2>
                                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
    <div id="about" class="about-area default-padding bg-gray relative">

        <!-- Shape -->
        <div class="shape-left-top shape">
            <img src="homepage/assets/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row">

                <div class="col-lg-6 thumb">
                    <div class="thumb-box">
                        <img src="homepage/assets/img/stp3.jpeg" alt="Thumb">
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <h5>Fungsi dan Peran Solo Technopark</h5>
                    <h3>Sinergi Antara Akademisi, Bisnis, Goverment, Community, dan Media</h3>
                    <p>
                    Menjadi kawasan terpadu dunia industri, perguruan tinggi, riset dan teknologi serta kewirausahaan berbasis teknologi dan inovasi bagi industri kecil menengah dalam rangka peningkatan daya saing dan pertumbuhan ekonomi daerah. Peran media mensupport semua aktivitas di Solo Technopark tersebut.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div id="informasiumum" class="department-area carousel-shadow default-padding-bottom bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Informasi Umum</h4>
                        <h2>Solo Technopark</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-items department-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="homepage/assets/img/stp4.jpeg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Informasi 1</a></h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem enim deserunt iusto cum veritatis fugit molestias sit aperiam tempora animi!
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="homepage/assets/img/stp4.jpeg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Informasi 2</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum molestiae fugiat doloribus mollitia! Debitis officia similique culpa distinctio nulla aliquid?
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="homepage/assets/img/stp4.jpeg" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Informasi 3</a></h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam sequi mollitia officiis quas maxime, quae sed quasi laudantium esse ab?</p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bottom shape">
            <img src="homepage/assets/img/shape/8.png" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Services -->


    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="homepage/assets/img/Logo-Technopark-Remake-Solo-1.png" width="200" alt="Logo">
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>info@solotechnopark.id</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>(+62)271666628</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Facebook:</h5>
                                            <a href="https://www.facebook.com/solotechnopark.id">solotechnopark.id</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Instagram:</h5>
                                            <a href="https://www.instagram.com/Solotechnopark_official/">Solotechnopark_official</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-item col-lg-0 col-md-6 item">
                        <div class="f-item branches">
                            <div class="branches">
                              
                                <iframe src="https://goo.gl/maps/ggEnNxAWDrLydvfV7" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="homepage/assets/js/jquery-1.12.4.min.js"></script>
    <script src="homepage/assets/js/popper.min.js"></script>
    <script src="homepage/assets/js/bootstrap.min.js"></script>
    <script src="homepage/assets/js/jquery.appear.js"></script>
    <script src="homepage/assets/js/jquery.easing.min.js"></script>
    <script src="homepage/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="homepage/assets/js/modernizr.custom.13711.js"></script>
    <script src="homepage/assets/js/owl.carousel.min.js"></script>
    <script src="homepage/assets/js/wow.min.js"></script>
    <script src="homepage/assets/js/isotope.pkgd.min.js"></script>
    <script src="homepage/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="homepage/assets/js/count-to.js"></script>
    <script src="homepage/assets/js/jquery.nice-select.min.js"></script>
    <script src="homepage/assets/js/bootsnav.js"></script>
    <script src="homepage/assets/js/main.js"></script>
    @section("script")
	<!-- google maps api -->
	<script src="https://www.google.com/maps/place/Solo+Techno+Park/@-7.5560692,110.8538665,15z/data=!4m6!3m5!1s0x2e7a16e2b5ffa643:0xa0bf36ec85b94dfb!8m2!3d-7.5560692!4d110.8538665!16s%2Fg%2F1pp2tkfp9" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"async defer></script>
	<script src="{{ asset('assets/plugins/gmaps/map-custom-script.js') }}"></script>
	@endsection

</body>
</html>