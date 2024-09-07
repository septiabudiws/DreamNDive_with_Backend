<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vixto Modern Personal Blog HTML5 Template">
  <meta name="author" content="DynamicLayers">

  <title>Detail - {{ $portofolio->nama_portofolio }}</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('cavoni') }}/assets/images/favicon.png">

  <link rel="stylesheet" href="{{ asset('vixto') }}/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('vixto') }}/assets/css/venobox.min.css">
  <link rel="stylesheet" href="{{ asset('vixto') }}/assets/css/swiper.min.css">
  <link rel="stylesheet" href="{{ asset('vixto') }}/assets/css/main.css">
  <link rel="stylesheet" href="{{ asset('cavoni') }}/assets/css/style.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <!-- /.site-preloader -->

  <header class="main-header">
    <div class="bottom-header">
      <div class="container">
        <div class="main-header-wapper">
          <div class="logo pb-4">
            <a href="/">DreamNDive</a>
          </div>
          <div class="main-header-info">
            <div class="header-menu-wrap">
              <ul class="nav-menu">
                <li>
                  <a href="{{ url('/') }}" data-text="Home">Home</a>
                </li>
                <li>
                  <a href="{{ url('/') }}#about" data-text="About">About</a>
                </li>
                <li>
                  <a href="{{ url('/') }}#work" data-text="Work">Work</a>
                </li>
                <li>
                  <a href="{{ url('/') }}#contact" data-text="Contact">Contact</a>
                </li>
              </ul>
            </div>
            <div class="menu-right-item">
              <button class="mobile-menu-action">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.bottom-header -->
  </header>
  <!--/.main-header-->

  <div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
      <form id="form" action="#" method="get" role="search">
        <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        <button id="popup-search-button" type="submit" name="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14.811 14.811">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              transform="translate(-2.25 -2.25)">
              <circle cx="5.5" cy="5.5" r="5.5" data-name="Ellipse 7" transform="translate(3 3)">
              </circle>
              <path d="m16 16-3.142-3.142"></path>
            </g>
          </svg>
        </button>
      </form>
      <div class="search-close"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24"
          viewBox="0 -960 960 960" width="24">
          <path
            d="M256-213.847 213.847-256l224-224-224-224L256-746.153l224 224 224-224L746.153-704l-224 224 224 224L704-213.847l-224-224-224 224Z" />
        </svg>
      </div>
    </div>
  </div>
  <!--/.popup-search-box-->

  <div id="searchbox-overlay"></div>
  <!--/.searchbox-overlay-->

  <section class="single-page no-sidebar padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="cover">
            <div class="single-post-thumb">
              <img src="{{ asset('foto_ckeditor') }}/12066113_4833725.jpg" alt="thumb">
            </div>
          </div>
          <header class="entry-header">
            <ul class="post-meta-vixto">
              <li><a class="date fs-5 text-black" href="{{ url('/#work') }}">{{ $portofolio->kategori->nama_kategori }}</a></li>
              <li class="sep"></li>
              <li><a href="category.html" class="date">{{ \Carbon\Carbon::parse($portofolio->tanggal)->translatedFormat('d F Y') }}</a></li>
            </ul>
            <h2 class="post-title">{{ $portofolio->nama_portofolio }}</h2>
          </header>
          <div class="single-post-content">
            <p>{!! $portofolio->deskripsi !!}</p>
            @if ($portofolio->quotes != null)
                <blockquote>
              <svg width="54" height="40" viewBox="0 0 54 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_311_7235)">
                  <path
                    d="M11.3087 24.2569V23.2569H10.3087H1.60408C1.28718 23.2569 1 22.9905 1 22.6238V1.63309C1 1.26637 1.28718 1 1.60408 1H22.2219C22.5388 1 22.826 1.26637 22.826 1.63309V22.6238C22.826 22.6933 22.8149 22.7621 22.7934 22.8275L22.7929 22.8289L17.6385 38.5721C17.5519 38.8371 17.3159 39 17.0675 39H11.9128C11.596 39 11.3087 38.7334 11.3087 38.3669V24.2569Z"
                    stroke="currentColor" stroke-width="2" />
                  <path
                    d="M41.3087 24.2569V23.2569H40.3087H31.6041C31.2872 23.2569 31 22.9905 31 22.6238V1.63309C31 1.26637 31.2872 1 31.6041 1H52.2219C52.5388 1 52.826 1.26637 52.826 1.63309V22.6238C52.826 22.6933 52.8149 22.7621 52.7934 22.8275L52.7929 22.8289L47.6385 38.5721C47.5519 38.8371 47.3159 39 47.0675 39H41.9128C41.596 39 41.3087 38.7334 41.3087 38.3669V24.2569Z"
                    stroke="currentColor" stroke-width="2" />
                </g>
                <defs>
                  <clipPath id="clip0_311_7235">
                    <rect width="54" height="40" />
                  </clipPath>
                </defs>
              </svg>
              <p>"{{ $portofolio->quotes }}" <span>{{ $portofolio->author }}</span></p>
            </blockquote>
            @endif
            @if ($portofolio->link != null)
                <div class="entry-header">
              <h2 class="post-title">Preview Video</h2>
              <div class="video-wrapper">
                <iframe width="560" height="315"
                  src="{{ $portofolio->link }}" loading="lazy" frameborder="0"
                  allowfullscreen></iframe>
              </div>
            </div>
            @endif
            <footer class="entry-footer">
              <ul class="tag-list">
                @if ($portofolio->link != null)
                <li><a href="{{ $portofolio->linkDefault }}" target="blank">Klik Disini Jika Video Error</a></li>
                @endif
                <li><a href="/">Kembali</a></li>
              </ul>
              <ul class="tag-list">
                <li><a href="{{ url('/') }}#contact">Pesan Sekarang</a></li>
              </ul>
            </footer>
            <!--/.post-navigation-->
          </div>
        </div>
      </div>
  </section>
  <!--/.single-page-->

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
  <!--/.footer-section-->
  <!--scrollup-->

  <!--jQuery Lib-->
  <script src="{{ asset('vixto') }}/assets/js/vendor/jquary-3.6.0.min.js"></script>
  <script src="{{ asset('vixto') }}/assets/js/vendor/bootstrap.min.js"></script>
  <script src="{{ asset('vixto') }}/assets/js/vendor/popper.min.js"></script>
  <script src="{{ asset('vixto') }}/assets/js/vendor/venobox.min.js"></script>
  <script src="{{ asset('vixto') }}/assets/js/vendor/swiper.min.js"></script>
  <script src="{{ asset('vixto') }}/assets/js/mailchimp.js"></script>
  <script src="{{ asset('vixto') }}/assets/js/main.js"></script>

</body>

</html>
