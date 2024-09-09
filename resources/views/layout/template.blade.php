<!DOCTYPE html>


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('admin') }}/assets/" data-template="vertical-menu-template"
  data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard DreamNDive</title>


  <meta name="description"
    content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template." />
  <meta name="keywords"
    content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/materialize_admin">


  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('cavoni') }}/assets/images/favicon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
    rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/remixicon/remixicon.css" />
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/flag-icons.css" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
  <link rel="stylesheet"
    href="{{ asset('admin') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/swiper/swiper.css" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/pages/cards-statistics.css" />
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/pages/cards-analytics.css" />

  <!-- Helpers -->
  <script src="{{ asset('admin') }}/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('admin') }}/assets/js/config.js"></script>

</head>

<body>
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo ">
          <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
              <span style="color:var(--bs-primary);">
                <img width="60" src="{{ asset('cavoni') }}/assets/images/favicondndfix.png" alt="">
              </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">DreamNDive</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
                fill-opacity="0.9" />
              <path
                d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
                fill-opacity="0.4" />
            </svg>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Apps & Pages -->
          <li class="menu-header mt-5">
            <span class="menu-header-text" data-i18n="MENU">PLEASE WAIT</span>
          </li>
          <li class="menu-item">
            <a href="/dashboard" class="menu-link">
              <i class="menu-icon tf-icons ri-home-smile-line"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/kategori" class="menu-link">
              <i class="menu-icon tf-icons ri-archive-drawer-line"></i>
              <div data-i18n="Kategori">Kategori</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/portofolio" class="menu-link">
              <i class="menu-icon tf-icons ri-book-read-line"></i>
              <div data-i18n="Portofolio">Portofolio</div>
            </a>
          </li>
          <!-- Academy menu start -->
          {{-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons ri-graduation-cap-line'></i>
        <div data-i18n="Academy">Academy</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="app-academy-dashboard.html" class="menu-link">
            <div data-i18n="Dashboard">Dashboard</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-academy-course.html" class="menu-link">
            <div data-i18n="My Course">My Course</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="app-academy-course-details.html" class="menu-link">
            <div data-i18n="Course Details">Course Details</div>
          </a>
        </li>
      </ul>
    </li> --}}
          <!-- Academy menu end -->
        </ul>
      </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
              <i class="ri-menu-fill ri-22px"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="{{ asset('admin') }}/assets/img/avatars/1.png" alt class="rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-2">
                          <div class="avatar avatar-online">
                            <img src="{{ asset('admin') }}/assets/img/avatars/1.png" alt class="rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block small">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>

                  <div class="d-grid px-4 pt-2 pb-1">
                    <a class="btn btn-sm btn-danger d-flex" href="/logout">
                      <small class="align-middle">Logout</small>
                      <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                    </a>
                  </div>
              </li>
            </ul>
            </li>
            <!--/ User -->
            </ul>
          </div>
          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
              aria-label="Search...">
            <i class="ri-close-fill search-toggler cursor-pointer"></i>
          </div>
        </nav>
        <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            @yield('content')
            <div class="row g-6">
            </div>
          </div>
          <!-- / Content -->
          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div
                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                <div class="text-body mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear())
                  </script>, made with <span class="text-danger"><i
                      class="tf-icons ri-heart-fill"></i></span> by <a href="/" target="_blank"
                    class="footer-link">DreamNDive</a>
                </div>
              </div>
            </div>
          </footer>
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('admin') }}/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->
  <!-- Vendors JS -->
  <script src="{{ asset('admin') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="{{ asset('admin') }}/assets/vendor/libs/swiper/swiper.js"></script>
  <!-- Main JS -->
  <script src="{{ asset('admin') }}/assets/js/main.js"></script>
  <!-- Page JS -->
  <script src="{{ asset('admin') }}/assets/js/dashboards-crm.js"></script>
</body>

</html>
