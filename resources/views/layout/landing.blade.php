<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Personal Portfolio Template" />
  <meta name="keywords"
    content="creative personal, resume, cv, portfolio, personal, developer, designer,personal resume, onepage, clean, modern" />
  <meta name="author" content="Tanvir Rahman Hridoy" />
  <!-- PAGE TITLE -->
  <title>DreamNDive</title>
  <link rel="icon" type="image/png" href="{{ asset('cavoni') }}/assets/images/favicon.png" />
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/bootstrap/css/bootstrap.min.css" />
  <!-- ALL GOOGLE FONTS -->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800,900&amp;subset=latin-ext"
    rel="stylesheet" />
  <!-- FONT AWESOME CSS -->
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/fonts/font-awesome.min.css" />
  <!-- OWL CAROSEL CSS -->
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/owlcarousel/css/owl.carousel.css" />
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/owlcarousel/css/owl.theme.css" />
  <!-- MAGNIFIC CSS -->
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/css/magnific-popup.css" />
  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/css/animate.min.css" />
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/css/effects.css" />
  <!-- MAIN STYLE CSS -->
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/css/style.css" />
  <!-- RESPONSIVE CSS -->
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/css/responsive.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!-- START PRELOADER -->
  <div class="preloader">
    <div class="status">
      <div class="status-mes"></div>
    </div>
  </div>
  <!-- / END PRELOADER -->

  <!-- START HOMEPAGE DESIGN AREA -->
  <header id="home" class="welcome-area site-header">
    <div class="header-top-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <!-- START LOGO DESIGN AREA -->
            <div class="logo">
              <a href="/">DreamNDive</a>
            </div>
            <!-- END LOGO DESIGN AREA -->
          </div>
          <div class="col-sm-9">
            <!-- START MENU DESIGN AREA -->
            <div class="mainmenu">
              <div class="navbar navbar-nobg">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="nav-toggle hidden-xs">
                  <button class="toggle-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                      <a class="smoth-scroll" href="#home">Home
                        <div class="ripple-wrapper"></div>
                      </a>
                    </li>
                    <li><a class="smoth-scroll" href="#about">About</a></li>
                    <li><a class="smoth-scroll" href="#work">Work</a></li>
                    <li>
                      <a class="smoth-scroll" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- END MENU DESIGN AREA -->
          </div>
        </div>
      </div>
    </div>
    @yield('content')
    <!-- START FOOTER DESIGN AREA -->
    <!-- <footer class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-end wow fadeInUp">
            <p>Sosial Media Kami</p>
          </div>

          <div class="col-sm-12 text-start wow fadeInUp" data-wow-delay="0.2s">
            <p>&copy;Copyright 2024 by dreamndive</p>
          </div>
        </div>
      </div>
    </footer> -->
    <footer class="nilsbrown-footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Get in touch</h5>
            <a href="#contact" class="smoth-scroll">
              <p>anddived@gmail.com</p>
            </a>
          </div>
          <div class="col-md-4">
            <h5>Locations</h5>
            <p>Sumenep — Indonesia</p>
          </div>
          <div class="col-md-4 text-right">
            <ul class="nilsbrown-footer-social-link">
              <li>
                <a href="https://wa.me/6282131778864" target="_blank"><i class="bx bxl-whatsapp"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/dreamndive/" target="_blank"><i class="bx bxl-instagram"></i></a>
              </li>
              <li>
                <a href="#" target="_blank"><i class="bx bxl-tiktok"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- / END FOOTER DESIGN AREA -->

    <!-- LATEST JQUERY -->
    <script src="{{ asset('cavoni') }}/assets/js/jquery.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('cavoni') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="{{ asset('cavoni') }}/assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- MIXITUP JS -->
    <script src="{{ asset('cavoni') }}/assets/js/jquery.mixitup.js"></script>
    <!-- PARALLAX JS -->
    <script src="{{ asset('cavoni') }}/assets/js/jquery.stellar.min.js"></script>
    <!-- MAGNIFICANT JS -->
    <script src="{{ asset('cavoni') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="{{ asset('cavoni') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('cavoni') }}/assets/js/jquery.waypoints.min.js"></script>
    <!-- WOW JS -->
    <script src="{{ asset('cavoni') }}/assets/js/wow.min.js"></script>
    <!-- CONTACT FORM JS -->
    <script src="{{ asset('cavoni') }}/assets/js/form-contact.js"></script>
    <!-- SCRIPT JS -->
    <script src="{{ asset('cavoni') }}/assets/js/scripts.js"></script>
</body>

</html>
