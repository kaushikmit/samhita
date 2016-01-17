<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Samhita 2K16</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Terminal CSS-->
    <link href="assets/terminal/css/jquery.terminal.css" rel="stylesheet"/>

    <!--Particle Effects for Header -->
    <script src="http://threejs.org/build/three.min.js"></script>
    <script src="http://threejs.org/examples/js/renderers/Projector.js"></script>
    <script src="http://threejs.org/examples/js/renderers/CanvasRenderer.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/tween.min.js"></script>
    <style>
         #partners-slide .item{
          margin: 3px;
        }
        #partners-slide.item img{
          display: block;
          width: 100%;
          height: auto;
        }
    </style>
    

    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="assets/js/plugins/retina/retina.min.js"></script>
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="assets/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/background.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/animate.css" rel="stylesheet" type="text/css">
    <!-- Vitality Theme CSS -->
    <!-- Uncomment the color scheme you want to use. -->
    <!-- <link href="assets/css/vitality-red.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-aqua.css" rel="stylesheet" type="text/css"> -->
    <!--<link href="assets/css/vitality-blue.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-green.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-orange.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-pink.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-purple.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-tan.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-turquoise.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-yellow.css" rel="stylesheet" type="text/css"> -->
    <!-- Style Switcher CSS - Demo Purposes Only! -->
    <link id="changeable-colors" rel="stylesheet" href="assets/css/vitality-red.css">
    <link href="assets/demo/style-switcher.css" rel="stylesheet">
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- Alternate Body Classes: .modern and .vintage -->

<body id="page-top">
    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="assets/img/logo.png" class="img-responsive" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">ABOUT US</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#events">EVENTS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#partners">PARTNERS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#workshops">WORKSHOPS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">LOGIN/SIGNUP</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">CONTACT</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--style="background-image: url('assets/img/back3.jpg');"-->
    <header class="video">
        <div class="intro-content">
            <div id="samhitaintro" class="brand-name">SAMHITA 16</div>

        </div>
        <div class="scroll-down animated infinite bounce">
            <a class="btn page-scroll" href="#about"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
    </header>
    <section>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12 wow fadeIn">
                    <h1>Get Ready for the Ultimate Technical Extravenza !</h1>
                    <hr class="colored">
                </div>
            </div>
            <div class="row text-center content-row">
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                    <div class="about-content">
                        <i class="fa fa-code fa-4x animated infinite bounce"></i>
                        <h3 id="event">50+ Events</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                    <div class="about-content">
                        <i class="fa fa-television fa-4x animated infinite bounce"></i>
                        <h3 id="event1">10+ Workshops</h3>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                    <div class="about-content">
                        <i class="fa fa-user-plus fa-4x animated infinite bounce"></i>
                        <h3 id="event2">100+ Colleges</h3>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".8s">
                    <div class="about-content">
                        <i class="fa fa-money fa-4x animated infinite bounce"></i>
                        <h3 id="event3">5L+ Cash Prizes</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray" id="about">
        <div class="container text-center wow fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <center>
                   <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="section-heading">ABOUT MIT</h4>
                               <p class="text-justify"><font color="black">Madras Institute of Technology, a pioneer institution and a part of Anna University is a center of technical excellence and a temple of learning. Imparting knowledge and a unique culture since 1949, MIT was an innovator of sorts right from its birth and continues to be recognized as a trend-setter and a leader in technical education. It has churned out quite a few illustrious personalities like Dr. A.P.J.Abdul Kalam, Shri Sujatha, Shri. K.B.Chandrasekar and many more.</h5></font></p>
                        </div>
                        <div class="col-sm-6">
                    <h3 class="section-heading">ABOUT SAMHITA</h4>
                               <p class="text-justify"><font color="black">The most awaited and exciting technical symposium is here to wreak havoc in your brains. Organised by the Information Technology Association (ITA), Madras Institute of technology, Samhita is guaranteed to provide two days of wholesome entertainment and some exercise to your brain with awesome internships and amazing prizes.Register now to win amazing prizes and to enjoy 2 days of Unbounded Dexterity across India !</h5></font></p>
                        </div>
                    </div>
                </center>
                <hr class="colored">
                </div>
            </div>
    </section>
    <section class="portfolio-carousel wow fadeIn">
        <div class="item" style="background-image: url('assets/img/portfolio/bg-1.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/logo-1.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/img/portfolio/bg-2.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/logo-2.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal2" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/img/portfolio/bg-3.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/logo-1.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal3" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/img/portfolio/bg-4.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="assets/img/client-logos/logo-2.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal4" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="events">
        <div class="container text-center wow fadeIn">
            <h2>EVENTS</h2>
                <hr class="colored">
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="portfolio-filter">
                        <ul id="filters" class="clearfix">
                            <li>
                                <span class="filter active" data-filter="identity graphic logo web">All</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="identity">Onsite</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="graphic">Online</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="web">General</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="portfoliolist">
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/identity/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Generic Inc.</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Brands</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Excellence</a>
                                        <span class="text-category">Poster Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">YouTV</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Office Supplies</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Fooder</a>
                                        <span class="text-category">Mobile App</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Mountain Tea</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Checkmark</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal1" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/identity/2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Demish</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/web/4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">OneRepublic</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/graphic/5.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Postable</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio identity" data-cat="identity" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src="assets/img/portfolio/grid/identity/3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Simpli Nota</a>
                                        <span class="text-category">Brand Identity</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials bg-gray" id="partners">
        <div class="container wow fadeIn">
            <h2>OUR PARTNERS</h2>
            <hr class="colored">
            <br>
            <div id="partners-slide">
          
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
              <div class="item"><img src="" width="80px" height="80px" alt="Owl Image" class="img-circle"></div>
             
            </div>
        </div>
    </section>
    <section id="workshops" class="pricing" style="background-image: url('assets/img/back3.jpg')">
        <div class="container wow fadeIn">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>WORKSHOPS</h2>
                    <hr class="colored">
                    <div class="row">
                          <div class="col-md-4"><img src="assets/img/back1.jpg" width="100px" height="100px"class="img-circle" id="workshop1"></div>
                          <div class="col-md-4"><img src="assets/img/back1.jpg" width="100px" height="100px"class="img-circle" id="workshop2"></div>
                          <div class="col-md-4"><img src="assets/img/back1.jpg" width="100px" height="100px"class="img-circle" id="workshop3"></div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                          <div class="col-md-4"><img src="assets/img/back1.jpg" width="100px" height="100px"class="img-circle" id="workshop4"></div>
                          <div class="col-md-4"><img src="assets/img/back1.jpg" width="100px" height="100px"class="img-circle" id="workshop5"></div>
                          <div class="col-md-4"><img src="assets/img/back1.jpg" width="100px" height="100px"class="img-circle" id="workshop6"></div>
                    </div>


                </div>
            </div>
            
    </section>
    <section class="cta-form bg-dark">
        <div class="container text-center">
            <h3>Get Notified!</h3>
            <hr class="colored">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <!-- Replace the form action in the line below with your MailChimp embed action! For more informatin on how to do this please visit the Docs! -->
                        <form role="form" action="http://startbootstrap.us3.list-manage.com/subscribe/post?u=531af730d8629808bd96cf489&amp;id=afb284632f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div class="input-group input-group-lg">
                                <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
                                <span class="input-group-btn">
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Subscribe!</button>
                                </span>
                            </div>
                            <div id="mce-responses">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End MailChimp Signup Form -->
                </div>
            </div>
        </div>
    </section>
    <section id="login">
        <div class="container wow fadeIn">
            <div class="row">
                
                    <center><h2>LOGIN/SIGNUP</h2></center>
                    <center><hr class="colored"></center>
                    <div class="row">
                        <div class="col-md-6">.
                            <div class="col-lg-12 text-center" id="terminal-login">
                        
                            </div>
                        </div>
                        <div class="col-md-6">
                                <!--Login-->

                        </div>
                    </div>
                    
            </div>
            
        </div>
    </section>
    <section id="contact" class="cta-form bg-dark">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>GET IN TOUCH</h2>
                    <hr class="colored">
                    
                </div>
            </div>

    </section>
    
    <!-- Portfolio Modals -->
    <!-- Example Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-1.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com/">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com/">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com/">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-2.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com/">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com/">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com/">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com/">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com/">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com/">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/portfolio/bg-4.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com/">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com/">April 2015</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com/">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Style Switcher - FOR DEMO PURPOSES ONLY -->
    <div id="style-switcher" class="close-style-switcher animated bounce">
        <!--Panel Button -->
        <a class="panel-button"><i class="fa fa-gear"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4>USER DASHBOARD</h4>
        </div>
        <div class="segment">
            <h4>MENU</h4>
            <ul class="list-unstyled">
                <li><a href="agency.html">HOME</a>
                </li>
                <li><a href="culinary.html">EVENTS</a>
                </li>
                <li><a href="fashion.html">WORKSHOPS</a>
                </li>
                <li><a href="legal.html">OFFERS</a>
                </li>
                <li><a href="video.html">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Style Switcher -->
    <!-- Core Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugin Scripts -->
    <script src="assets/js/plugins/jquery.easing.min.js"></script>
    <script src="assets/js/plugins/classie.js"></script>
    <script src="assets/js/plugins/cbpAnimatedHeader.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/background/core.js"></script>
    <script src="assets/js/plugins/background/transition.js"></script>
    <script src="assets/js/plugins/background/background.js"></script>
    <script src="assets/js/plugins/jquery.mixitup.js"></script>
    <script src="assets/js/plugins/wow/wow.min.js"></script>
    <script src="assets/js/contact_me.js"></script>
    <script src="assets/js/plugins/jqBootstrapValidation.js"></script>
    <!-- Vitality Theme Scripts -->
    <script src="assets/js/vitality.js"></script>
    <!-- Style Switcher Scripts - Demo Purposes Only! -->
    <script src="assets/demo/style.switcher.js"></script>
    <!--Notyjs-->
    <script type="text/javascript" src="assets/js/jquery.noty.packaged.min.js"></script>
    <!--Notifyjs-->
    <script type="text/javascript" src="assets/js/notify.js"></script>
    <script type="text/javascript" src="assets/js/notify.min.js"></script>

    <!--Terminal Emulator-->
    
    <script src="assets/terminal/js/jquery.mousewheel-min.js"></script>
    <script src="assets/terminal/js/jquery.terminal-min.js"></script>
    
    <!--Jquery for CSS3 Animations -->
    <script>
    $('#samhitaintro').mouseover(function() {
        $(this).addClass("animated bounce");
        
    });
    $('#event').mouseover(function() {
        $(this).addClass("animated bounceIn");
        console.log('Hello')
    });
    $('#event1').mouseover(function() {
        $(this).addClass("animated bounceIn");
        console.log('Hello')
    });
    $('#event2').mouseover(function() {
        $(this).addClass("animated bounceIn");
        console.log('Hello')
    });
    $('#event3').mouseover(function() {
        $(this).addClass("animated bounceIn");
        console.log('Hello')
    });
    $(document).ready(function(){
    $("#workshop1").mouseenter(function(){
        $("#workshop1").width(200);
        $("#workshop1").height(200);
        $(this).css('border', "solid 2px red");  
    });
    $("#workshop1").mouseleave(function(){
       $("#workshop1").width(100);
       $("#workshop1").height(100);
       $(this).css('border', "solid 1px black");  
    });
    $("#workshop2").mouseenter(function(){
        $("#workshop2").width(200);
        $("#workshop2").height(200);
        $(this).css('border', "solid 2px red"); 
    });
    $("#workshop2").mouseleave(function(){
       $("#workshop2").width(100);
       $("#workshop2").height(100);
       $(this).css('border', "solid 1px black");  
    });
    $("#workshop3").mouseenter(function(){
        $("#workshop3").width(200);
        $("#workshop3").height(200);
        $(this).css('border', "solid 2px red"); 
    });
    $("#workshop3").mouseleave(function(){
       $("#workshop3").width(100);
       $("#workshop3").height(100);
       $(this).css('border', "solid 1px black");  
    });
    $("#workshop4").mouseenter(function(){
        $("#workshop4").width(200);
        $("#workshop4").height(200);
        $(this).css('border', "solid 2px red"); 
    });
    $("#workshop4").mouseleave(function(){
       $("#workshop4").width(100);
       $("#workshop4").height(100);
       $(this).css('border', "solid 1px black");  
    });
    $("#workshop5").mouseenter(function(){
        $("#workshop5").width(200);
        $("#workshop5").height(200);
        $(this).css('border', "solid 2px red"); 
    });
    $("#workshop5").mouseleave(function(){
       $("#workshop5").width(100);
       $("#workshop5").height(100);
       $(this).css('border', "solid 1px black");  
    });
    $("#workshop6").mouseenter(function(){
        $("#workshop6").width(200);
        $("#workshop6").height(200);
        $(this).css('border', "solid 2px red"); 
    });
    $("#workshop6").mouseleave(function(){
       $("#workshop6").width(100);
       $("#workshop6").height(100);
       $(this).css('border', "solid 1px black");  
    });

});

    
   $.notify("Samhita is scheduled on March 11,12", "info",{clickToHide:true,autoHide:false});
   $.notify("Event Registrations have begun !", "info");
   $.notify("Workshop Registrations have begun !", "info");

   $(document).ready(function() {
 
  $("#partners-slide").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});

   jQuery(function($, undefined) {
    $('#terminal-login').terminal(function(command, term) {
        if (command !== '') {
            try {
                var result = window.eval(command);
                if (result !== undefined) {
                    term.echo(new String(result));
                }
            } catch(e) {
                term.error(new String(e));
            }
        } else {
           term.echo('');
        }
    }, {
        greetings: 'Signup for Samhita 16',
        name: 'js_demo',
        height: 200,
        prompt: 'js> '});
});


    </script>
    
</body>
</html>
