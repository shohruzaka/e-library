<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>TATU Nurafshon filiali &amp; e-Library</title>

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
  <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

  <!-- Fonts and Styles -->
  @yield('css_before')

  <link rel="stylesheet" href="{{asset('js/plugins/slick-carousel/slick.css')}}">
  <link rel="stylesheet" href="{{asset('js/plugins/slick-carousel/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css')}}">
  <link rel="stylesheet" href="{{asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css')}}">
  <link rel="stylesheet" href="{{asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css')}}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
  <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
  <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">

  <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
  @yield('css_after')

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
</head>

<body>

  <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-classic main-content-narrow">
    <!-- Sidebar -->
    <nav id="sidebar">
      <!-- Sidebar Content -->
      <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center bg-black-10">
          <!-- Logo -->
          <div>
            <span class="smini-visible fw-bold tracking-wide fs-lg">
              c<span class="text-primary">b</span>
            </span>
            <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
              <span class="smini-hidden">
                <i class="fa fa-fire text-primary"></i>
                <span class="fs-4 text-dual">E-</span><span class="fs-4 text-primary">Library</span>
              </span>
            </a>
          </div>
          <!-- END Logo -->

          <!-- Options -->
          <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
              <i class="fa fa-fw fa-times"></i>
            </button>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Main Navigation -->
          <div class="content-side content-side-full">
            <!--
              Mobile navigation, desktop navigation can be found in #page-header

              If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
              -->
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-house-user"></i>
                  <span class="nav-main-link-name">Boshqaruv paneli</span>
                </a>
              </li>
              <li class="nav-main-heading">Asosiy</li>
              <li class="nav-main-item open">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                  <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                  <span class="nav-main-link-name">Categoriyalar</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="bd_variations_hero_simple_1.html">
                      <span class="nav-main-link-name">categoriya qoshish</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Boshqalar</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="bd_search.html">
                  <i class="nav-main-link-icon fa fa-search"></i>
                  <span class="nav-main-link-name">Mualliflar</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_dashboard.html">
                  <i class="nav-main-link-icon fa fa-book"></i>
                  <span class="nav-main-link-name">Nashriyotlar</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- END Side Main Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </div>
      <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div class="space-x-1">
          <!-- Logo -->
          <a class="link-fx fw-bold" href="{{route('home')}}">
            <i class="fa fa-fire text-primary"></i>
            <span class="fs-4 text-dual">e-</span><span class="fs-4 text-primary">library</span>
          </a>
          <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Middle Section -->
        <div class="d-none d-lg-block">
          <!-- Header Navigation -->
          <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
          <ul class="nav-main nav-main-horizontal nav-main-hover">
            <li class="nav-main-item">
              <a class="nav-main-link" href="#">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Bosh sahifa</span>
              </a>
            </li>
            <li class="nav-main-heading">Asosiy</li>
            <li class="nav-main-item">
              <a class="nav-main-link active nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                <span class="nav-main-link-name">O'quv materiallari</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="bd_variations_hero_simple_1.html">
                    <span class="nav-main-link-name">Categoriyalar</span>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-main-heading">Boshqalar</li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="bd_search.html">
                <i class="nav-main-link-icon fa fa-link"></i>
                <span class="nav-main-link-name">Biz haqimizda</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="be_pages_dashboard.html">
                <i class="nav-main-link-icon fa fa-book"></i>
                <span class="nav-main-link-name">Hisobotlar</span>
              </a>
            </li>
          </ul>
          <!-- END Header Navigation -->
        </div>
        <!-- END Middle Section -->

        <!-- Right Section -->
        <div class="space-x-1">
          <!-- Toggle Sidebar -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-fw fa-bars"></i>
          </button>
          <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
      </div>
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
      <!-- Hero -->
      @yield('content')
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer">
      <div class="content py-3">
        <div class="row fs-sm">
          <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
            <i class="fa fa-wrench text-danger"></i> by <a class="fw-semibold" href="#" target="_blank">Shohruz</a>
          </div>
          <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
            <a class="fw-semibold" href="#" target="_blank">Nurafshon</a> &copy; <span data-toggle="year-copy"></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->
  </div>
  <!-- END Page Container -->

  <!-- Codebase Core JS -->
  <script src="{{ asset('js/codebase.app.js') }}"></script>

  <script src="{{asset('js/lib/jquery.min.js')}}"></script>
  <!-- Page JS Plugins -->
  <script src="{{asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <script src="{{asset('js/plugins/slick-carousel/slick.min.js')}}"></script>

  <script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>

  <script>
    Codebase.helpersOnLoad(['jq-magnific-popup', 'jq-slick']);
  </script>

  @yield('js_after')
</body>

</html>