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
  <!-- Page Container -->
  <!--
    Available classes for #page-container:

  GENERIC

    'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                - Theme helper buttons [data-toggle="theme"],
                                                - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

  SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

  HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-modern'                        Modern Header style
    'page-header-dark'                          Dark themed Header (works only with classic Header style)
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

  DARK MODE

    'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
  -->
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
                  <a class="nav-main-link" href="{{route('dashboard')}}">
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
                <a class="nav-main-link" href="{{route('dashboard')}}">
                  <i class="nav-main-link-icon fa fa-house-user"></i>
                  <span class="nav-main-link-name">Boshqaruv paneli</span>
                </a>
              </li>
              <li class="nav-main-heading">Asosiy</li>
              <li class="nav-main-item">
                <a class="nav-main-link active nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                  <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                  <span class="nav-main-link-name">Kitoblar</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="bd_variations_hero_simple_1.html">
                      <span class="nav-main-link-name">Catrgoriyalar</span>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-main-heading">Boshqalar</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="bd_search.html">
                  <i class="nav-main-link-icon fa fa-search"></i>
                  <span class="nav-main-link-name">Nashriyotlar</span>
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
            <!-- Color Themes -->
            <!-- Themes functionality initialized in Template._uiHandleTheme() -->
           
            <!-- END Color Themes -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="bd_search.html" method="POST">
              <div class="input-group">
                <!-- Close Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Search Section -->
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <button type="submit" class="btn btn-secondary">
                  <i class="fa fa-fw fa-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="far fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
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
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="#" target="_blank">Shohruz</a>
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
  <script src="{{ mix('js/codebase.app.js') }}"></script>

  <!-- Laravel Original JS -->
  <!-- <script src="{{ mix('js/laravel.app.js') }}"></script> -->

  @yield('js_after')
</body>

</html>
