<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{ config('app.name', 'Lets Go Every Nation') }} | @yield('page-title')</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.transitions.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>

        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Josefin+Slab" rel="stylesheet">

        @yield('header-scripts')
    </head><!--/head-->

    <body id="home" class="homepage">

        <header id="header">
            <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#home">{{ config('app.name', 'LetsGoEn') }}</a>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="scroll active"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#services">Travel</a></li>
                            <li class="scroll"><a href="#features">Explore</a></li>

                            <li class="scroll"><a href="#portfolio">Blogs</a></li>
                            <li class="scroll"><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->

        <section id="main-slider">
            <div class="owl-carousel">
                <div class="item" style="background-image: url(images/slider/slide_01.JPG);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="carousel-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/slide_02.JPG);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="carousel-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/slide_03.JPG);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="carousel-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.owl-carousel-->
        </section><!--/#main-slider-->

        <section id="services" >
            <div class="container">

                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Luzon Travel</h2>
                </div>

                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                            <div class="media service-box">

                                <div class="media-body">
                                    <h4 class="media-heading">Albay</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                            <div class="media service-box">
                                <div class="media-body">
                                    <h4 class="media-heading">Pangasinan</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                            <div class="media service-box">
                                <div class="media-body">
                                    <h4 class="media-heading">Zambales</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
                    </div>
                </div><!--/.row-->

                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Visayas Travel</h2>
                </div>

                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                            <div class="media service-box">

                                <div class="media-body">
                                    <h4 class="media-heading">Albay</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                            <div class="media service-box">
                                <div class="media-body">
                                    <h4 class="media-heading">Pangasinan</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                            <div class="media service-box">
                                <div class="media-body">
                                    <h4 class="media-heading">Zambales</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
                    </div>
                </div><!--/.row-->

                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Mindanao Travel</h2>
                </div>

                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                            <div class="media service-box">

                                <div class="media-body">
                                    <h4 class="media-heading">Albay</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                            <div class="media service-box">
                                <div class="media-body">
                                    <h4 class="media-heading">Pangasinan</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                            <div class="media service-box">
                                <div class="media-body">
                                    <h4 class="media-heading">Zambales</h4>
                                    <img class="img-responsive" src="images/slider/albay.jpg" alt="">
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#services-->

        <section id="contact">
            <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
            <div class="container-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <div class="contact-form">
                                <h3>Contact Info</h3>

                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>

                                <form id="main-contact-form" name="contact-form" method="post" action="#">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2017 LetsGoEn.
                    </div>
                    <div class="col-sm-6">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/mousescroll.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.inview.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>

        @yield('header-scripts')
    </body>
</html>