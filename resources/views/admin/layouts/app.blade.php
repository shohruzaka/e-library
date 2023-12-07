<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>e-Library Admin paneli</title>

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
       
        <!-- END Side Overlay -->

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
                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link active" href="{{route('home')}}">
                                    <i class="nav-main-link-icon fa fa-coffee"></i>
                                    <span class="nav-main-link-name">Saytga o'tish</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">Asosiy</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-briefcase"></i>
                                    <span class="nav-main-link-name">Kitoblar</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="">
                                            <span class="nav-main-link-name">New</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="">
                                            <span class="nav-main-link-name">Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-file-invoice-dollar"></i>
                                    <span class="nav-main-link-name">Kategoriyalar</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name">Hikmatli so'zlar</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-wallet"></i>
                                    <span class="nav-main-link-name">Talabalar</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-layer-group"></i>
                                    <span class="nav-main-link-name">Requests</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">Settings</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-sticky-note"></i>
                                    <span class="nav-main-link-name">Profile</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-lock"></i>
                                    <span class="nav-main-link-name">Security</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
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
                <div class="d-flex align-items-center space-x-2">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->

                    <!-- Full Search -->
                    <form class="d-none d-sm-inline-block" action="db_classic.html" method="POST" onsubmit="return false;">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </form>
                    <!-- END Full Search -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="space-x-1">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold">Admin</span>
                            <i class="fa fa-angle-down opacity-50 ms-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_profile.html">
                                    <span>Profile</span>
                                    <i class="fa fa-fw fa-user opacity-25"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span>Inbox</span>
                                    <i class="fa fa-fw fa-envelope-open opacity-25"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_invoice.html">
                                    <span>Invoices</span>
                                    <i class="fa fa-fw fa-file opacity-25"></i>
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <span>Settings</span>
                                    <i class="fa fa-fw fa-wrench opacity-25"></i>
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="op_auth_signin.html">
                                    <span>Sign Out</span>
                                    <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
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
            <!-- Page Content -->
            <div class="content">
                <div class="row">
                    <!-- Row #1 -->
                    <div class="col-md-6 col-xl-3">
                        <a class="block block-bordered block-rounded block-link-shadow text-start" href="javascript:void(0)">
                            <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fs-3 fw-semibold">34</div>
                                    <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                                </div>
                                <div>
                                    <i class="si si-bag fa-2x opacity-25"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a class="block block-bordered block-rounded block-link-shadow text-start" href="javascript:void(0)">
                            <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fs-3 fw-semibold">$780</div>
                                    <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                                </div>
                                <div>
                                    <i class="si si-wallet fa-2x opacity-25"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a class="block block-bordered block-rounded block-link-shadow text-start" href="javascript:void(0)">
                            <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fs-3 fw-semibold">65</div>
                                    <div class="fs-sm fw-semibold text-uppercase text-muted">Online</div>
                                </div>
                                <div>
                                    <i class="si si-globe fa-2x opacity-25"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a class="block block-bordered block-rounded block-link-shadow text-start" href="javascript:void(0)">
                            <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fs-3 fw-semibold">7</div>
                                    <div class="fs-sm fw-semibold text-uppercase text-muted">Projects</div>
                                </div>
                                <div>
                                    <i class="si si-briefcase fa-2x opacity-25"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- END Row #1 -->
                </div>
                <div class="row">
                    <!-- Row #2 -->
                    <div class="col-md-6">
                        <div class="block block-bordered block-rounded">
                            <div class="block-header block-header-default border-bottom">
                                <h3 class="block-title">
                                    Sales <small>This week</small>
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content border-bottom">
                                <div class="row items-push text-center">
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-success">
                                            <i class="fa fa-caret-up"></i> +16%
                                        </div>
                                        <div class="fs-4 fw-semibold">720</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-danger">
                                            <i class="fa fa-caret-down"></i> -3%
                                        </div>
                                        <div class="fs-4 fw-semibold">160</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-success">
                                            <i class="fa fa-caret-up"></i> +9%
                                        </div>
                                        <div class="fs-4 fw-semibold">24.3</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Average</div>
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-danger">
                                            <i class="fa fa-caret-down"></i> -6%
                                        </div>
                                        <div class="fs-4 fw-semibold">96.2</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">This Year</div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <!-- Lines Chart Container functionality is initialized in js/pages/db_classic.min.js which was auto compiled from _js/pages/db_classic.js -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <canvas id="js-chartjs-classic-lines"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block block-bordered block-rounded">
                            <div class="block-header block-header-default border-bottom">
                                <h3 class="block-title">
                                    Earnings <small>This week</small>
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content border-bottom">
                                <div class="row items-push text-center">
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-success">
                                            <i class="fa fa-caret-up"></i> +4%
                                        </div>
                                        <div class="fs-4 fw-semibold">$ 6,540</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-danger">
                                            <i class="fa fa-caret-down"></i> -7%
                                        </div>
                                        <div class="fs-4 fw-semibold">$ 1,525</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-success">
                                            <i class="fa fa-caret-up"></i> +35%
                                        </div>
                                        <div class="fs-4 fw-semibold">$ 9,352</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Balance</div>
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <div class="fw-semibold text-success">
                                            <i class="fa fa-caret-up"></i> +28%
                                        </div>
                                        <div class="fs-4 fw-semibold">$ 19k</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">This Year</div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <!-- Lines Chart Container functionality is initialized in js/pages/db_classic.min.js which was auto compiled from _js/pages/db_classic.js -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <canvas id="js-chartjs-classic-lines2"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- END Row #2 -->
                </div>
                <div class="row">
                    <!-- Row #3 -->
                    <div class="col-md-4">
                        <div class="block block-bordered block-rounded">
                            <div class="block-content block-content-full">
                                <div class="py-3 text-center">
                                    <div class="mb-3">
                                        <i class="si si-earphones fa-3x text-success"></i>
                                    </div>
                                    <div class="fs-4 fw-semibold">4.8k Songs</div>
                                    <div class="text-muted">Your library is growing!</div>
                                    <div class="pt-3">
                                        <a class="btn btn-alt-success" href="javascript:void(0)">
                                            <i class="fa fa-shopping-bag opacity-50 me-1"></i> Get more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block block-bordered block-rounded">
                            <div class="block-content block-content-full">
                                <div class="py-3 text-center">
                                    <div class="mb-3">
                                        <i class="si si-diamond fa-3x text-warning"></i>
                                    </div>
                                    <div class="fs-4 fw-semibold">7580 Points</div>
                                    <div class="text-muted">Nice, you are doing great!</div>
                                    <div class="pt-3">
                                        <a class="btn btn-alt-warning" href="javascript:void(0)">
                                            <i class="fa fa-check opacity-50 me-1"></i> Redeem them now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block block-bordered block-rounded">
                            <div class="block-content block-content-full">
                                <div class="py-3 text-center">
                                    <div class="mb-3">
                                        <i class="si si-grid fa-3x text-info"></i>
                                    </div>
                                    <div class="fs-4 fw-semibold">2 Grid Servers</div>
                                    <div class="text-muted">Currently active.</div>
                                    <div class="pt-3">
                                        <a class="btn btn-alt-info" href="javascript:void(0)">
                                            <i class="fa fa-plus opacity-50 me-1"></i> Add More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Row #3 -->
                </div>
                <div class="row">
                    <!-- Row #4 -->
                    <div class="col-md-6">
                        <a class="block block-bordered block-rounded" href="javascript:void(0)">
                            <div class="block-content block-content-full">
                                <i class="si si-game-controller fa-2x text-body-bg-dark"></i>
                                <div class="row pt-2 pb-4 text-center">
                                    <div class="col-6 border-end">
                                        <div class="fs-3 fw-semibold">190</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Games</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="fs-3 fw-semibold">870</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Subscriptions</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="block block-bordered block-rounded" href="javascript:void(0)">
                            <div class="block-content block-content-full">
                                <div class="text-end">
                                    <i class="si si-wallet fa-2x text-body-bg-dark"></i>
                                </div>
                                <div class="row pt-2 pb-4 text-center">
                                    <div class="col-6 border-end">
                                        <div class="fs-3 fw-semibold">$840</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Today</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="fs-3 fw-semibold">$4,490</div>
                                        <div class="fs-sm fw-semibold text-uppercase text-muted">Last Week</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- END Row #4 -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-extra-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">Codebase 5.1</a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->
   
   
    <script src="{{ mix('js/codebase.app.js') }}"></script>

    @yield('js_after')
</body>

</html>