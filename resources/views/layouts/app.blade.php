<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>TATU Nurafshon filiali &amp; e-Library</title>

    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    @yield('css_before')
    <link rel="stylesheet" href="{{asset('js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick-carousel/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">


    @yield('css_after')
</head>

<body>
    <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header main-content-narrow">
        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header justify-content-lg-center bg-black-10">
                    <!-- Logo -->
                    <div>
                        <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
                            <span class="smini-hidden">
                                <i class="fa fa-fire text-primary"></i>
                                <span class="fs-4 text-dual">e-</span><span class="fs-4 text-primary">library</span>
                            </span>
                        </a>
                    </div>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->
                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Main Navigation -->
                    <div class="content-side content-side-full">

                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link active" href="/">
                                    <i class="nav-main-link-icon fa fa-home"></i>
                                    <span class="nav-main-link-name">Bosh sahifa</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <i class="nav-main-link-icon fa fa-medal"></i>
                                    <span class="nav-main-link-name">Kitobxon talaba</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <i class="nav-main-link-icon fa fa-compass"></i>
                                    <span class="nav-main-link-name">Biz haqimizda</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <i class="nav-main-link-icon fa fa-book"></i>
                                    <span class="nav-main-link-name">Yangi adabiyotlar</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('dashboard')}}">
                                    <i class="nav-main-link-icon fa fa-briefcase"></i>
                                    <span class="nav-main-link-name">Kabinet</span>
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
                    <a class="link-fx fw-bold" href="index.html">
                        <i class="fa fa-fire text-primary"></i>
                        <span class="fs-4 text-dual">e-</span><span class="fs-4 text-primary">library</span>
                    </a>
                    <!-- END Logo -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center space-x-2">

                    <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="/">
                                <i class="nav-main-link-icon fa fa-home"></i>
                                <span class="nav-main-link-name">Bosh sahifa</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon fa fa-medal"></i>
                                <span class="nav-main-link-name">Kitobxon talaba</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon fa fa-compass"></i>
                                <span class="nav-main-link-name">Biz haqimizda</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon fa fa-book"></i>
                                <span class="nav-main-link-name">Yangi adabiyotlar</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{route('dashboard')}}">
                                <i class="nav-main-link-icon fa fa-briefcase"></i>
                                <span class="nav-main-link-name">Kabinet</span>
                            </a>
                        </li>
                    </ul>

                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">

            @yield('content')

        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-extra-light">
            <div class="content content-full">
                <div class="row g-0 fs-sm pt-3">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold">Muzaffar</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="" target="_blank">e-Library 1.0</a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
                <!-- END Copyright Info -->
            </div>
        </footer>
        <!-- END Footer -->
    </div>




    <!-- END Page Container -->
    <script src="{{ asset('js/codebase.app.js') }}"></script>

    <script src="{{asset('js/lib/jquery.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('js/plugins/slick-carousel/slick.min.js')}}"></script>

    <script src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables-buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js/pages/be_tables_datatables.js')}}"></script>

    <script>
        Codebase.helpersOnLoad(['jq-magnific-popup', 'jq-slick']);
    </script>

    @yield('js_after')

</body>

</html>